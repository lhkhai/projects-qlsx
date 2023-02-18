<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateInventory extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('inventory');
        $table->addColumn('product_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('warehouse_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('receiving_amount', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('issuing_amount', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('created_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]); 
        $table->addColumn('created_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('modified_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('deleted_at', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('deleted_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
