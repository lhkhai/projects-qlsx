<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProductsReceivedNotes extends AbstractMigration
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
        $table = $this->table('products_received_notes');
        $table->addColumn('order_number', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('warehouse_from', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('warehouse_to', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('remark', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('note_maker_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('deliverer_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('stockkeeper_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('approver_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
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
