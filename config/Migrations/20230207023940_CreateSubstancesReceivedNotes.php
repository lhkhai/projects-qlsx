<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateSubstancesReceivedNotes extends AbstractMigration
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
        $table = $this->table('substances_received_notes');
        $table->addColumn('order_number', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('
auditing_note_num', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('producing_type', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('phase', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => true,
        ]);
        $table->addColumn('manufacturer_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('packing_specification', 'string', [
            'default' => null,  
            'limit' => 150,
            'null' => true,
        ]);
        $table->addColumn('conclusion', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => true,
        ]);
        $table->addColumn('remark', 'text', [
            'default' => null,
            'null' => true,
        ]);
        
        $table->addColumn('note_maker_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('leader_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('stockkeeper_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('approver_id', 'integer', [
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
