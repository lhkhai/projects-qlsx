<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Receivers Model
 *
 * @property \App\Model\Table\MaterialsReceivedNoteTable&\Cake\ORM\Association\HasMany $MaterialsReceivedNote
 * @property \App\Model\Table\ProductsIssueNoteTable&\Cake\ORM\Association\HasMany $ProductsIssueNote
 * @property \App\Model\Table\SubstancesReceivedNoteTable&\Cake\ORM\Association\HasMany $SubstancesReceivedNote
 *
 * @method \App\Model\Entity\Receiver newEmptyEntity()
 * @method \App\Model\Entity\Receiver newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Receiver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Receiver get($primaryKey, $options = [])
 * @method \App\Model\Entity\Receiver findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Receiver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Receiver[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Receiver|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receiver saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receiver[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receiver[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receiver[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Receiver[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ReceiversTable extends Table
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

        $this->setTable('receivers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('MaterialsReceivedNote', [
            'foreignKey' => 'receiver_id',
        ]);
        $this->hasMany('ProductsIssueNote', [
            'foreignKey' => 'receiver_id',
        ]);
        $this->hasMany('SubstancesReceivedNote', [
            'foreignKey' => 'receiver_id',
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
            ->scalar('telephone')
            ->maxLength('telephone', 11)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

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
