<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materials Model
 *
 * @method \App\Model\Entity\Material newEmptyEntity()
 * @method \App\Model\Entity\Material newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsTable extends Table
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

        $this->setTable('materials');
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
            ->allowEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 50)
            ->allowEmptyString('code');

        $validator
            ->scalar('remark')
            ->allowEmptyString('remark');

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
