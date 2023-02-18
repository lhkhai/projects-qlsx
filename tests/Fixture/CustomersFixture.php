<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
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
                'type' => 1,
                'telephone' => 'Lorem ips',
                'created_at' => '2023-02-07 07:17:51',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:17:51',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:17:51',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
