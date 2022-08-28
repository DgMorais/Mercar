<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResponseQueue Model
 *
 * @method \App\Model\Entity\ResponseQueue newEmptyEntity()
 * @method \App\Model\Entity\ResponseQueue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ResponseQueue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResponseQueue get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResponseQueue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ResponseQueue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResponseQueue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResponseQueue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResponseQueue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResponseQueue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResponseQueue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResponseQueue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResponseQueue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ResponseQueueTable extends Table
{
    public const CREATED_RESPONSE = 0;
    public const PROCESSING_RESPONSE = 1;
    public const TRY_AGAIN_RESPONSE = 2;
    public const RESPONSE_PROCESSED = 3;
    public const RESPONSE_ERROR = 4;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('response_queue');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasOne('PaymentsQueue');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('payment_id')
            ->requirePresence('payment_id', 'create')
            ->notEmptyString('payment_id');

        $validator
            ->scalar('data_raw')
            ->requirePresence('data_raw', 'create')
            ->notEmptyString('data_raw');

        $validator
            ->scalar('redirect')
            ->maxLength('redirect', 150)
            ->requirePresence('redirect', 'create')
            ->notEmptyString('redirect');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->integer('tries')
            ->notEmptyString('tries');

        $validator
            ->dateTime('begin')
            ->allowEmptyDateTime('begin');

        $validator
            ->dateTime('end')
            ->allowEmptyDateTime('end');

        $validator
            ->scalar('erros')
            ->allowEmptyString('erros');

        return $validator;
    }

    public function createResponse($payment)
    {
        if (!empty($payment)) {
            $new_response['payment_id'] = $payment->id;
            $new_response['data_raw'] = $payment->response;
            $new_response['redirect'] = env('PAGSEGURO_RESPONSE_REDIRECT') . '/' . $payment->sale_id;
            $new_response['status'] = $this::CREATED_RESPONSE;
            $new_response['tries'] = 0;
            $new_response = $this->newEntity($new_response);
            if ($this->save($new_response)) {
                return true;
            }            
        }
    }
}
