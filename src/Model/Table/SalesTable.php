<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\View\Helper\SessionHelper;
use Cake\Http\ServerRequest;

/**
 * Sales Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PaymentsQueueTable&\Cake\ORM\Association\HasMany $PaymentsQueue
 * @property \App\Model\Table\UserRequestsTable&\Cake\ORM\Association\HasMany $UserRequests
 *
 * @method \App\Model\Entity\Sale newEmptyEntity()
 * @method \App\Model\Entity\Sale newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sale findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sale[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sale|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sale saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sale[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SalesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('UserRequests', [
            'foreignKey' => 'sale_id',
        ]);
        
        $this->belongsTo('Enderecos', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER',
        ]);
        
        $this->belongsTo('Cupons', [
            'foreignKey' => 'cupom_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('PaymentsQueue', [
            'foreignKey' => 'sale_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('PaymentsQueue', [
            'foreignKey' => 'sale_id',
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
            ->integer('user_id')
            ->requirePresence('user_id', 'create')
            ->notEmptyString('user_id');

        $validator
            ->integer('address_id')
            ->allowEmptyString('address_id');

        $validator
            ->decimal('valor')
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->integer('cupom_id')
            ->allowEmptyString('cupom_id');

        $validator
            ->decimal('desconto')
            ->requirePresence('desconto', 'create')
            ->notEmptyString('desconto');

        $validator
            ->decimal('valor_final')
            ->requirePresence('valor_final', 'create')
            ->notEmptyString('valor_final');

        $validator
            ->scalar('destinatario')
            ->allowEmptyString('destinatario');

        $validator
            ->scalar('forma_pagamento')
            ->maxLength('forma_pagamento', 50)
            ->allowEmptyString('forma_pagamento');

        $validator
            ->integer('parcelas')
            ->allowEmptyString('parcelas');

        $validator
            ->boolean('liberado')
            ->notEmptyString('liberado');

        $validator
            ->scalar('status_pagseguro')
            ->maxLength('status_pagseguro', 100)
            ->allowEmptyString('status_pagseguro');

        $validator
            ->scalar('id_pagseguro')
            ->allowEmptyString('id_pagseguro');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }

    public function buildValidator($event, $validator , $options) {
        if (isset($_SESSION['carrinho']['id_sale'])) {
            $sale = $this->find()
                ->where(
                    [
                        'id' => $_SESSION['carrinho']['id_sale']
                    ]
                )
                ->contain('UserRequests')
                ->first();
            if (!empty($sale)) {
                if ($this->UserRequests->deleteAll(['sale_id' => $sale->id])) {
                    if ($this->delete($sale)) {
                        return true;
                    }
                }
            }
        }
    }

    public function newPaymentQueue($sale, $request)
    {
        if ($request['type-method'] == 'credit_card') {
            $sale->forma_pagamento = 'cartao';
        } else if ($request['type-method'] == 'boleto') {
            $sale->forma_pagamento = 'boleto';
        } else if ($request['type-method'] == 'pix') {
            $sale->forma_pagamento = 'pix';
        }
        $sale->parcelas = $request['parcelas'];
        $endereco = $this->Enderecos->get($sale->address_id);
        $sale->destinatario = $endereco->destinatario;
        if ($this->save($sale)) {
            if ($this->PaymentsQueue->createPayments($sale, $request)) {
                return true;
            }

        }
    }

    public function getCupom($id_cupom)
    {
        return $this->Cupons->get($id_cupom);
    }
}
