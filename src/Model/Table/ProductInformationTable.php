<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductInformation Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ProductInformation newEmptyEntity()
 * @method \App\Model\Entity\ProductInformation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductInformation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductInformation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductInformation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductInformation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductInformation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInformation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInformation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInformation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductInformationTable extends Table
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

        $this->setTable('product_information');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasOne('Products');
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
            ->integer('product_id')
            ->notEmptyString('product_id');

        $validator
            ->decimal('weight')
            ->allowEmptyString('weight');

        $validator
            ->scalar('dimension')
            ->allowEmptyString('dimension');

        $validator
            ->scalar('other_informations')
            ->allowEmptyString('other_informations');

        $validator
            ->scalar('more_informations')
            ->allowEmptyString('more_informations');

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
        $rules->add($rules->existsIn('product_id', 'Products'), ['errorField' => 'product_id']);

        return $rules;
    }
}
