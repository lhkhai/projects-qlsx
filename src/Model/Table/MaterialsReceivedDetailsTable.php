<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialsReceivedDetails Model
 *
 * @property \App\Model\Table\MaterialsTable&\Cake\ORM\Association\BelongsTo $Materials
 * @property \App\Model\Table\MaterialsReceivedNotesTable&\Cake\ORM\Association\BelongsTo $MaterialsReceivedNotes
 *
 * @method \App\Model\Entity\MaterialsReceivedDetail newEmptyEntity()
 * @method \App\Model\Entity\MaterialsReceivedDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsReceivedDetailsTable extends Table
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

        $this->setTable('materials_received_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Materials', [
            'foreignKey' => 'material_id',
        ]);
        $this->belongsTo('MaterialsReceivedNotes', [
            'foreignKey' => 'materials_received_note_id',
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
            ->integer('material_id')
            ->allowEmptyString('material_id');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->integer('materials_received_note_id')
            ->notEmptyString('materials_received_note_id');

        $validator
            ->date('expire_date')
            ->requirePresence('expire_date', 'create')
            ->notEmptyDate('expire_date');

        $validator
            ->integer('batch_number')
            ->requirePresence('batch_number', 'create')
            ->notEmptyString('batch_number');

        $validator
            ->date('manufacturing_date')
            ->requirePresence('manufacturing_date', 'create')
            ->notEmptyDate('manufacturing_date');

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
        $rules->add($rules->existsIn('material_id', 'Materials'), ['errorField' => 'material_id']);
        $rules->add($rules->existsIn('materials_received_note_id', 'MaterialsReceivedNotes'), ['errorField' => 'materials_received_note_id']);

        return $rules;
    }
}
