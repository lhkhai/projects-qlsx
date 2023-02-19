<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialsReceivedNotes Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\ReceiversTable&\Cake\ORM\Association\BelongsTo $Receivers
 *
 * @method \App\Model\Entity\MaterialsReceivedNote newEmptyEntity()
 * @method \App\Model\Entity\MaterialsReceivedNote newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsReceivedNotesTable extends Table
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

        $this->setTable('materials_received_notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
        ]);
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
            ->integer('product_id')
            ->allowEmptyString('product_id');

        $validator
            ->integer('batch_number')
            ->allowEmptyString('batch_number');

        $validator
            ->integer('size_number')
            ->allowEmptyString('size_number');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 50)
            ->allowEmptyString('unit');

        $validator
            ->scalar('packing_specification')
            ->maxLength('packing_specification', 150)
            ->allowEmptyString('packing_specification');

        $validator
            ->scalar('remark')
            ->allowEmptyString('remark');

        $validator
            ->integer('note_maker')
            ->allowEmptyString('note_maker');

        $validator
            ->integer('receiver_id')
            ->allowEmptyString('receiver_id');

        $validator
            ->integer('stockkeeper_fk')
            ->allowEmptyString('stockkeeper_fk');

        $validator
            ->integer('approver_fk')
            ->allowEmptyString('approver_fk');

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
        $rules->add($rules->existsIn('receiver_id', 'Receivers'), ['errorField' => 'receiver_id']);

        return $rules;
    }
}
