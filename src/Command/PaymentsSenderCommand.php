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
 * PaymentsSender command.
 */
class PaymentsSenderCommand extends Command
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('PaymentsQueue');
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
        ->setDescription('Command to send payments to gateway')
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
                    'command' => 'PaymentsQueue',
                    'OR' => [
                        ['status' => RoutinesTable::ROUTINE_CREATED],
                        ['status' => RoutinesTable::ROUTINE_RESEND]
                    ],
                    'tries <= 2'
                ]
            )
            ->first();
        if (!empty($routine)) {
            $routine->status = RoutinesTable::ROUTINE_RUNNING;
            $routine->tries++;
            $routine->begin = new \DateTime();
            $this->Routines->save($routine);
            $payments = $this->PaymentsQueue->find()
                ->where(
                    [
                        'OR' => [
                            ['status' => $this->PaymentsQueue::CREATED_PAYMENT],
                            ['status' => $this->PaymentsQueue::RESEND_PAYMENT]
                        ],
                        'tries <= 2'
                    ]
                )
                ->limit(10)
                ->toArray();
            if (!empty($payments)) {
                foreach ($payments as $payment) {
                    try {
                        $payment->status = $this->PaymentsQueue::PROCESSING_PAYMENT;
                        $payment->tries++;
                        $this->PaymentsQueue->save($payment);
                        $request = new ClientRequest(
                            env('PAGSEGURO_REQUEST'),
                            ClientRequest::METHOD_POST,
                            [
                                'content-type' => 'application/json',
                                'x-idempotency-key' => '',
                                'Authorization' => env('PAGSEGURO_TOKEN')
                            ],
                            $payment->data_raw
                        );
                        $client = new Client();
                        $payment->begin = new \DateTime();
                        $response = $client->sendRequest($request);
                        if ($response->isOk())  {
                            $response = $response->getJson();
                            $payment->end = new \DateTime();
                            
                            $payment->status = $this->PaymentsQueue::PAYMENT_SENT;
                            $routine->status = RoutinesTable::ROUTINE_PERFORMED;
                            $routine->end = new \DateTime();
                            $payment->response = json_encode($response);
                            $this->PaymentsQueue->save($payment);
                            $this->Routines->save($routine);
                            if ($this->Routines->createRoutine('ResponseQueue') && $this->ResponseQueue->createResponse($payment)) {
                                return true;
                            } else {
                                throw new \Exception('Erro!');
                            }
                        } else {
                            if ($routine->tries <= 2) {
                                $routine->status = RoutinesTable::ROUTINE_RESEND;
                                $routine->end = new \DateTime();
                                $this->Routines->save($routine);
                                $payment->status = $this->PaymentsQueue::RESEND_PAYMENT;
                                $this->PaymentsQueue->save($payment);
                            } else {
                                $routine->status = RoutinesTable::ROUTINE_ERROR;
                                $routine->end = new \DateTime();
                                $this->Routines->save($routine);
                            }
                        }
                    } catch (\Exception | \Error $e) {
                        $payment->errors .= "Erro: Tentativa {$payment->tries} - " . $e->getMessage();
                        if($payment->tries >= 2){
                            $payment->status = $this->PaymentsQueue::PAYMENT_ERROR;
                        } else {
                            $payment->tries++;
                        }
                        $this->PaymentsQueue->save($payment);
                    } finally{
                        if($payment->tries >= 2 && $payment->status == $this->PaymentsQueue::PROCESSING_PAYMENT){
                            $payment->status = $this->PaymentsQueue::PAYMENT_ERROR;
                            $this->PaymentsQueue->save($payment);
                        }
                    }
                }
            }
        }
    }
}
