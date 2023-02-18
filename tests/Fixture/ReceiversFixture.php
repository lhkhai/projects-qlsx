<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReceiversFixture
 */
class ReceiversFixture extends TestFixture
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
                'created_at' => '2023-02-07 07:17:22',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:17:22',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:17:22',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
