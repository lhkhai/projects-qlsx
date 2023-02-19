<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoryFixture
 */
class InventoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventory';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'product_id' => 1,
                'warehouse_id' => 1,
                'receiving_amount' => 1,
                'issuing_amount' => 1,
                'created_at' => '2023-02-19 13:32:51',
                'created_by' => 1,
                'modified_at' => '2023-02-19 13:32:51',
                'modified_by' => 1,
                'deleted_at' => '2023-02-19 13:32:51',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
