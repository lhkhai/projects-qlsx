<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMaterialsIssueNotes extends AbstractMigration
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
        $table = $this->table('materials_issue_notes');
        $table->addColumn('order_number', 'string', [
            'default' => null,
            'limit'=>50,
            'null' => true,
        ]);
        $table->addColumn('warehouse_from', 'integer', [
            'default' => null,
            'limit'=>11,
            'null' => true,
        ]);
        $table->addColumn('receiving_unit', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('phase', 'string', [
            'default' => null,
            'limit'=>50,
            'null' => true,
        ]);
        $table->addColumn('size_number', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('batch_number', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('unit', 'string', [
            'default' => null,
            'limit'=>50,
            'null' => true,
        ]);
        $table->addColumn('packing_specification', 'string', [
            'default' => null,
            'limit'=>50,
            'null' => true,
        ]);
        $table->addColumn('remark', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('note_maker_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('receiver_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('stockkeeper_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('approver_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('modified_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('modified_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('deleted_at', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('deleted_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->create();
    }
}
