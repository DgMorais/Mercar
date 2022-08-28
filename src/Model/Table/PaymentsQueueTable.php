<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * PaymentsQueue Model
 *
 * @property \App\Model\Table\SalesTable&\Cake\ORM\Association\BelongsTo $Sales
 *
 * @method \App\Model\Entity\PaymentsQueue newEmptyEntity()
 * @method \App\Model\Entity\PaymentsQueue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsQueue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsQueue get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaymentsQueue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PaymentsQueue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsQueue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentsQueue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentsQueue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentsQueue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentsQueue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentsQueue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PaymentsQueue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaymentsQueueTable extends Table
{
    public const CREATED_PAYMENT = 0;
    public const PROCESSING_PAYMENT = 1;
    public const RESEND_PAYMENT = 2;
    public const PAYMENT_SENT = 3;
    public const PAYMENT_ERROR = 4;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('payments_queue');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sales', [
            'foreignKey' => 'sale_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('sale_id')
            ->requirePresence('sale_id', 'create')
            ->notEmptyString('sale_id');

        $validator
            ->scalar('data_raw')
            ->requirePresence('data_raw', 'create')
            ->notEmptyString('data_raw');

        $validator
            ->dateTime('begin')
            ->allowEmptyDateTime('begin');

        $validator
            ->dateTime('end')
            ->allowEmptyDateTime('end');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->integer('tries')
            ->notEmptyString('tries');

        $validator
            ->scalar('erros')
            ->allowEmptyString('erros');

        $validator
            ->scalar('response')
            ->allowEmptyString('response');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('sale_id', 'Sales'), ['errorField' => 'sale_id']);

        return $rules;
    }

    public function createPayments($sale, $request) 
    {
        $payment['reference_id'] = $sale->id;
        $payment['description'] = 'Compra realizada na loja Mercar';
        $payment['amount']['value'] = str_replace('.', '', $sale->valor_final);
        $payment['amount']['currency'] = "BRL";
        if ($request['type-method'] == 'credit_card') {
            $payment['payment_method']['type'] = "CREDIT_CARD";
            $payment['payment_method']['installments'] = $request['parcelas'];
            $payment['payment_method']['capture'] = true;
            $payment['payment_method']['card']['encrypted'] = $request['card-hash'];
        }
        $new_payment['sale_id'] = $sale->id;
        $new_payment['data_raw'] = json_encode($payment);
        $new_payment['status'] = $this::CREATED_PAYMENT;
        $new_payment['tries'] = 0;
        $new_payment = $this->newEntity($new_payment);
        if ($this->save($new_payment)) {
            $this->Routines = TableRegistry::getTableLocator()->get('Routines');
            if ($this->Routines->createRoutine('PaymentsQueue')) {
                return true;
            }
        }
    }
}
