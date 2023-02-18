<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
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
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('code', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('ingredient', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('producing_type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('packing_specification', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('dosage_form', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('registery_number', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('expiry_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('note', 'string', [
            'default' => null,
            'limit' => 255,
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
