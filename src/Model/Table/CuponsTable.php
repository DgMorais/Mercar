<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cupons Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Cupon newEmptyEntity()
 * @method \App\Model\Entity\Cupon newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Cupon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cupon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cupon findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Cupon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cupon[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cupon|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cupon saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cupon[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cupon[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cupon[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Cupon[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CuponsTable extends Table
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

        $this->setTable('cupons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);

        $this->hasMany('Sales', [
            'foreignKey' => 'cupom_id',
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
            ->integer('category_id')
            ->allowEmptyString('category_id');

        $validator
            ->integer('tipo_desconto')
            ->notEmptyString('tipo_desconto');

        $validator
            ->scalar('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo');

        $validator
            ->decimal('valor_real')
            ->notEmptyString('valor_real');

        $validator
            ->integer('valor_porcentagem')
            ->notEmptyString('valor_porcentagem');

        $validator
            ->integer('qtd_usos')
            ->notEmptyString('qtd_usos');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        $validator
            ->dateTime('validade')
            ->allowEmptyDateTime('validade');

        return $validator;
    }

    const TYPE_REAL = 1;
    const TYPE_PERCENTAGE = 2;

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('category_id', 'Categories'), ['errorField' => 'category_id']);

        return $rules;
    }

    public function calculaCupom($cupom, $subtotal)
    {
        if ($cupom->tipo_desconto == $this::TYPE_REAL) {
            $desconto = $cupom->valor_real;
        } else if ($cupom->tipo_desconto == $this::TYPE_PERCENTAGE) {
            $desconto = ($cupom->valor_porcentagem / 100) * $subtotal;
        }

        return $desconto;
    }
}
