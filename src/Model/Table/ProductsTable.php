<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\InventoryTable&\Cake\ORM\Association\HasMany $Inventory
 * @property \App\Model\Table\MaterialsIssueDetailsTable&\Cake\ORM\Association\HasMany $MaterialsIssueDetails
 * @property \App\Model\Table\MaterialsReceivedNoteTable&\Cake\ORM\Association\HasMany $MaterialsReceivedNote
 * @property \App\Model\Table\ProductsIssueDetailsTable&\Cake\ORM\Association\HasMany $ProductsIssueDetails
 * @property \App\Model\Table\ProductsReceivedDetailsTable&\Cake\ORM\Association\HasMany $ProductsReceivedDetails
 * @property \App\Model\Table\SubstancesIssueDetailsTable&\Cake\ORM\Association\HasMany $SubstancesIssueDetails
 * @property \App\Model\Table\SubstancesReceivedNoteTable&\Cake\ORM\Association\HasMany $SubstancesReceivedNote
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Inventory', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('MaterialsIssueDetails', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('MaterialsReceivedNote', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductsIssueDetails', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductsReceivedDetails', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('SubstancesIssueDetails', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('SubstancesReceivedNote', [
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 255)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('ingredient')
            ->maxLength('ingredient', 255)
            ->requirePresence('ingredient', 'create')
            ->notEmptyString('ingredient');

        $validator
            ->scalar('producing_type')
            ->maxLength('producing_type', 255)
            ->requirePresence('producing_type', 'create')
            ->notEmptyString('producing_type');

        $validator
            ->scalar('packing_specification')
            ->maxLength('packing_specification', 255)
            ->requirePresence('packing_specification', 'create')
            ->notEmptyString('packing_specification');

        $validator
            ->scalar('dosage_form')
            ->maxLength('dosage_form', 255)
            ->requirePresence('dosage_form', 'create')
            ->notEmptyString('dosage_form');

        $validator
            ->scalar('registery_number')
            ->maxLength('registery_number', 255)
            ->requirePresence('registery_number', 'create')
            ->notEmptyString('registery_number');

        $validator
            ->date('expiry_date')
            ->requirePresence('expiry_date', 'create')
            ->notEmptyDate('expiry_date');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->requirePresence('note', 'create')
            ->notEmptyString('note');

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
