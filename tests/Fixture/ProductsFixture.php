<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'code' => 'Lorem ipsum dolor sit amet',
                'ingredient' => 'Lorem ipsum dolor sit amet',
                'producing_type' => 'Lorem ipsum dolor sit amet',
                'packing_specification' => 'Lorem ipsum dolor sit amet',
                'dosage_form' => 'Lorem ipsum dolor sit amet',
                'registery_number' => 'Lorem ipsum dolor sit amet',
                'expiry_date' => '2023-02-07',
                'note' => 'Lorem ipsum dolor sit amet',
                'created_at' => '2023-02-07 07:12:58',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:12:58',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:12:58',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
