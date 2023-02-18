<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsReceivedNote Model
 *
 * @method \App\Model\Entity\ProductsReceivedNote newEmptyEntity()
 * @method \App\Model\Entity\ProductsReceivedNote newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsReceivedNote[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsReceivedNoteTable extends Table
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

        $this->setTable('products_received_note');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        //$this->belongTo('Employees',[
       //         'foreignKey'=>'stockkeeper_fk']);
       // $this->belongTo('Employees',[
          //  'foreignKey'=>'approver_fk']);
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
            ->requirePresence('order_number', 'create')
            ->notEmptyString('order_number');

        $validator
            ->integer('warehouse_from')
            ->requirePresence('warehouse_from', 'create')
            ->notEmptyString('warehouse_from');

        $validator
            ->integer('warehouse_to')
            ->requirePresence('warehouse_to', 'create')
            ->notEmptyString('warehouse_to');

        $validator
            ->scalar('remark')
            ->requirePresence('remark', 'create')
            ->notEmptyString('remark');

        $validator
            ->integer('note_maker')
            ->requirePresence('note_maker', 'create')
            ->notEmptyString('note_maker');

        $validator
            ->integer('deliverer')
            ->requirePresence('deliverer', 'create')
            ->notEmptyString('deliverer');

        $validator
            ->integer('stockkeeper_fk')
            ->requirePresence('stockkeeper_fk', 'create')
            ->notEmptyString('stockkeeper_fk');

        $validator
            ->integer('approver_fk')
            ->requirePresence('approver_fk', 'create')
            ->notEmptyString('approver_fk');

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
