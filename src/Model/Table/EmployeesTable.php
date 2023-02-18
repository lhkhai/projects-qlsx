<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 11)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmptyDateTime('created_at');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        $validator
            ->dateTime('modified_at')
            ->requirePresence('modified_at', 'create')
            ->notEmptyDateTime('modified_at');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmptyString('modified_by');

        $validator
            ->dateTime('deleted_at')
            ->requirePresence('deleted_at', 'create')
            ->notEmptyDateTime('deleted_at');

        $validator
            ->integer('deleted_by')
            ->requirePresence('deleted_by', 'create')
            ->notEmptyString('deleted_by');

        return $validator;
    }
}
