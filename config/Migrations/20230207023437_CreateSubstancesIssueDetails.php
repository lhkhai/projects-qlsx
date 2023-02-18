<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateSubstancesIssueDetails extends AbstractMigration
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
        $table = $this->table('substances_issue_details');
        $table = addColumn('substance_id','integer',[
            'default' =>null,
            'limit'=>11,
            'null'=>true,
        ]);
        $table->addColumn('amount', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('materials_received_note_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('expire_date','date');
        $table->addColumn('batch_number','integer',['default'=>null,
            'limit'=>11,
            'null'=>true,]);
        $table->addColumn('manufacturing', 'date',);
        $table->addColumn('substances_received_note_id','integer',['default'=>null,
         'limit'=>11,
            'null'=>true,]);
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
