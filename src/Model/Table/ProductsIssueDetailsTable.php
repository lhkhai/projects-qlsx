<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsIssueDetails Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ProductsIssueDetail newEmptyEntity()
 * @method \App\Model\Entity\ProductsIssueDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsIssueDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsIssueDetailsTable extends Table
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

        $this->setTable('products_issue_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
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
            ->scalar('auditing_note_num')
            ->maxLength('auditing_note_num', 50)
            ->allowEmptyString('auditing_note_num');

        $validator
            ->scalar('unit')
            ->maxLength('unit', 50)
            ->allowEmptyString('unit');

        $validator
            ->integer('logic_amount')
            ->allowEmptyString('logic_amount');

        $validator
            ->integer('actual_amount')
            ->allowEmptyString('actual_amount');

        $validator
            ->integer('product_issue_note_id')
            ->allowEmptyString('product_issue_note_id');

        $validator
            ->integer('product_id')
            ->allowEmptyString('product_id');

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

        return $rules;
    }
}
