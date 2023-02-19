<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsIssueNotes Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\ReceiversTable&\Cake\ORM\Association\BelongsTo $Receivers
 *
 * @method \App\Model\Entity\ProductsIssueNote newEmptyEntity()
 * @method \App\Model\Entity\ProductsIssueNote newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueNote|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsIssueNotesTable extends Table
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

        $this->setTable('products_issue_notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
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
            ->requirePresence('warehouse_from', 'create')
            ->notEmptyString('warehouse_from');

        $validator
            ->integer('customer_id')
            ->allowEmptyString('customer_id');

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
        $rules->add($rules->existsIn('customer_id', 'Customers'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn('receiver_id', 'Receivers'), ['errorField' => 'receiver_id']);

        return $rules;
    }
}
