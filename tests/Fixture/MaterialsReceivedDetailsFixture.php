<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaterialsReceivedDetailsFixture
 */
class MaterialsReceivedDetailsFixture extends TestFixture
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
                'material_id' => 1,
                'amount' => 1,
                'materials_received_note_id' => 1,
                'expire_date' => '2023-02-19',
                'batch_number' => 1,
                'manufacturing_date' => '2023-02-19',
                'created_at' => '2023-02-19 13:30:18',
                'created_by' => 1,
                'modified_at' => '2023-02-19 13:30:18',
                'modified_by' => 1,
                'deleted_at' => '2023-02-19 13:30:18',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
