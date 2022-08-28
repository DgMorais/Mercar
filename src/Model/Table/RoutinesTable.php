<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routines Model
 *
 * @method \App\Model\Entity\Routine newEmptyEntity()
 * @method \App\Model\Entity\Routine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Routine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Routine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Routine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Routine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Routine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Routine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Routine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoutinesTable extends Table
{
    public const ROUTINE_CREATED = 0;
    public const ROUTINE_RUNNING = 1;
    public const ROUTINE_RESEND = 2;
    public const ROUTINE_PERFORMED = 3;
    public const ROUTINE_ERROR = 4;
    
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('routines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('command')
            ->requirePresence('command', 'create')
            ->notEmptyString('command');

        $validator
            ->scalar('parameters')
            ->allowEmptyString('parameters');

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

    public function createRoutine($command, $parameters = null, $tries = 0)
    {
        if (!empty($command) && empty($parameters)) {
            $new_routine['command'] = $command;
            $new_routine['parameters'] = $parameters;
            $new_routine['tries'] = $tries;
            $new_routine['status'] = $this::ROUTINE_CREATED;

            $new_routine = $this->newEntity($new_routine);
            if ($this->save($new_routine)) {
                return true;
            }
        }
    }
}
