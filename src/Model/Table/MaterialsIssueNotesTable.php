<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialsIssueNotes Model
 *
 * @property \App\Model\Table\ReceiversTable&\Cake\ORM\Association\BelongsTo $Receivers
 *
 * @method \App\Model\Entity\MaterialsIssueNote newEmptyEntity()
 * @method \App\Model\Entity\MaterialsIssueNote newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsIssueNote[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsIssueNotesTable extends Table
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

        $this->setTable('materials_issue_notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Receivers', [
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
            ->scalar('order_number')
            ->maxLength('order_number', 50)
            ->allowEmptyString('order_number');

        $validator
            ->integer('warehouse_from')
            ->allowEmptyString('warehouse_from');

        $validator
            ->integer('receiving_unit')
            ->allowEmptyString('receiving_unit');

        $validator
            ->scalar('phase')
            ->maxLength('phase', 50)
            ->allowEmptyString('phase');

        $validator
            ->date('size_number')
            ->allowEmptyDate('size_number');

        $validator
            ->integer('batch_number')
            ->allowEmptyString('batch_number');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 50)
            ->allowEmptyString('unit');

        $validator
            ->scalar('packing_specification')
            ->maxLength('packing_specification', 50)
            ->allowEmptyString('packing_specification');

        $validator
            ->scalar('remark')
            ->allowEmptyString('remark');

        $validator
            ->integer('note_maker_id')
            ->allowEmptyString('note_maker_id');

        $validator
            ->integer('receiver_id')
            ->allowEmptyString('receiver_id');

        $validator
            ->integer('stockkeeper_id')
            ->allowEmptyString('stockkeeper_id');

        $validator
            ->integer('approver_id')
            ->allowEmptyString('approver_id');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->dateTime('deleted_at')
            ->allowEmptyDateTime('deleted_at');

        $validator
            ->integer('deleted_by')
            ->allowEmptyString('deleted_by');

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
        $rules->add($rules->existsIn('receiver_id', 'Receivers'), ['errorField' => 'receiver_id']);

        return $rules;
    }
}
