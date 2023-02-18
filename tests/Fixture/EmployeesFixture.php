<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2023-02-07 07:16:59',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:16:59',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:16:59',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
