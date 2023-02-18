<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WarehousesFixture
 */
class WarehousesFixture extends TestFixture
{
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
                'name' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'telephone' => 'Lorem ips',
                'created_at' => '2023-02-07 07:18:31',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:18:31',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:18:31',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
