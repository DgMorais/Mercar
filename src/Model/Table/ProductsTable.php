<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\PrecosTable&\Cake\ORM\Association\HasMany $Precos
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
        ]);
        $this->hasOne('Precos', [
            'foreignKey' => 'product_id',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'LEFT',
        ]);
        $this->hasMany('UserRequests', [
            'foreignKey' => 'product_id',
        ]);
        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER',
        ]);
        $this->hasOne('ProductInformation', [
            'foreignKey' => 'product_id',
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
            ->integer('store_id')
            ->allowEmptyString('store_id');

        $validator
            ->scalar('nome')
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('slug')
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->boolean('status')
            ->notEmptyString('status');

        $validator
            ->scalar('images')
            ->allowEmptyFile('images');

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
        $rules->add($rules->existsIn('store_id', 'Stores'), ['errorField' => 'store_id']);

        return $rules;
    }

    public function searchProducts($values, $user_id = null)
    {
        $products = $this->find()
            ->where(
                [
                    "Products.nome REGEXP '{$values}'",
                    'Products.status' => 1,
                    'Stores.status' => 1
                ]
            )
            ->contain('Precos')
            ->contain('Users')
            ->contain('Stores')
            ->contain('ProductInformation')
            ->contain('Categories');
        if ($user_id) {
            $products->where(
                [
                    'Products.user_id != ' . $user_id
                ]
            );
        }

        return $products;
    }

    public function addNewProduct($request, $image, $user, $store)
    {        
        $request['user_id'] = $user->id;
        $request['store_id'] = $store->id;
        if (empty($store)) {
            $request['slug'] = "{$user->id}-" . preg_replace('/[ ]/', '-', strtolower($request['nome']));;
        } else {
            $request['slug'] = "{$user->id}-{$store->slug}-" . preg_replace('/[ ]/', '-', strtolower($request['nome']));;
        }
        $request['images'] = json_encode($image);

        $request['preco']['preco_por'] = $request['preco']['preco_por'] = str_replace(',', '.', str_replace('.', '', str_replace('R$ ', '', $request['preco']['preco_por'])));
        $request['preco']['status'] = true;

        $request['product_information']['weight'] = preg_replace('/[^0-9]/', '', $request['product_information']['weight']);
        
        $new_product = $this->newEntity($request, ['contain' => ['Precos', 'ProductInformation']]);
        if ($this->save($new_product, ['associated' => ['Precos', 'ProductInformation']])) {
            return true;
        } else {
            return false;
        }
    }
}
