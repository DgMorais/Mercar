<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\Http\Client;
use Cake\Http\Client\Request as ClientRequest;
use App\Model\Table\RoutinesTable;

/**
 * ProcessResponse command.
 */
class ProcessResponseCommand extends Command
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('ResponseQueue');
        $this->loadModel('Routines');
    }

    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/4/en/console-commands/commands.html#defining-arguments-and-options
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser = parent::buildOptionParser($parser);
        $parser
        ->setDescription('Command to process response of payments')
        ->addOption('limit', 
            [
                'default' => 10
            ]
        );

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|void|int The exit code or null for success
     */
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $routine = $this->Routines->find()
            ->where(
                [
                    'command' => 'ResponseQueue',
                    'status' => RoutinesTable::ROUTINE_CREATED
                ]
            )
            ->first();
        if (!empty($routine)) {
            $routine->status = RoutinesTable::ROUTINE_RUNNING;
            $routine->tries++;
            $routine->begin = new \DateTime();
            $this->Routines->save($routine);
            $responses = $this->ResponseQueue->find()
                ->where(
                    [
                        'OR' => [
                            ['status' => $this->ResponseQueue::CREATED_RESPONSE],
                            ['status' => $this->ResponseQueue::TRY_AGAIN_RESPONSE]
                        ],
                        'tries <= 2'
                    ]
                )
                ->limit(10)
                ->toArray();
            if (!empty($responses)) {
                foreach ($responses as $response) {
                    try {
                        $response->status = $this->ResponseQueue::PROCESSING_RESPONSE;
                        $response->trie++;
                        $response->begin = new \DateTime();
                        $this->ResponseQueue->save($response);
                        
                        $request = new ClientRequest(
                            'http://' . env('APP_URL') . $response->redirect,
                            ClientRequest::METHOD_PUT,
                            [
                                'content-type' => 'application/json',
                                'Authorization' => md5(env('AUTHORIZATION_UPDATE'))
                            ],
                            $response->data_raw
                        );
                        $client = new Client();
                        $response_received = $client->sendRequest($request); 
                        if ($response_received->isOk())  {
                            $routine->status = RoutinesTable::ROUTINE_PERFORMED;
                            $routine->end = new \DateTime();
                            $this->Routines->save($routine);

                            $response->end = new \DateTime();
                            $response->status = $this->ResponseQueue::RESPONSE_PROCESSED;
                            $this->ResponseQueue->save($response);
                        } else {
                            if ($routine->tries <= 2) {
                                $routine->status = RoutinesTable::ROUTINE_RESEND;
                                $routine->end = new \DateTime();
                                $this->Routines->save($routine);

                                $payment->status = $this->ResponseQueue::TRY_AGAIN_RESPONSE;
                                $this->ResponseQueue->save($payment);
                            } else {
                                $routine->status = RoutinesTable::ROUTINE_ERROR;
                                $routine->end = new \DateTime();
                                $this->Routines->save($routine);

                                $payment->status = $this->ResponseQueue::RESPONSE_ERROR;
                                $this->ResponseQueue->save($payment);
                            }
                        }
                    } catch (\Exception | \Error $e) {
                        $response->errors .= "Erro: Tentativa {$response->tries} - " . $e->getMessage();
                        if($response->tries >= 2){
                            $response->status = $this->ResponseQueue::RESPONSE_ERROR;
                        } else {
                            $response->tries++;
                        }
                        $this->ResponseQueue->save($response);
                    } finally{
                        if($response->tries >= 2 && $response->status == $this->ResponseQueue::PROCESSING_RESPONSE){
                            $response->status = $this->ResponseQueue::RESPONSE_ERROR;
                            $this->ResponseQueue->save($response);
                        }
                    }
                }
            }
        }
    }
}
