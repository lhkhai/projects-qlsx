<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsReceivedDetailsFixture
 */
class ProductsReceivedDetailsFixture extends TestFixture
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
                'auditing_note_num' => 'Lorem ipsum dolor sit amet',
                'unit' => 'Lorem ipsum dolor sit amet',
                'logic_amount' => 1,
                'actual_amount' => 1,
                'product_received_note_id' => 1,
                'product_id' => 1,
                'created_at' => '2023-02-07 07:20:48',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:20:48',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:20:48',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
