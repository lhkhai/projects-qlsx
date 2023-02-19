<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubstancesReceivedNotesFixture
 */
class SubstancesReceivedNotesFixture extends TestFixture
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
                'order_number' => 'Lorem ipsum dolor sit amet',
                'warehouse_from' => 1,
                'receiving_unit' => 1,
                'phase' => 'Lorem ipsum dolor sit amet',
                'product_id' => 1,
                'batch_number' => 1,
                'size_number' => 1,
                'unit' => 'Lorem ipsum dolor sit amet',
                'packing_specification' => 'Lorem ipsum dolor sit amet',
                'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_maker' => 1,
                'receiver_id' => 'Lorem ipsum dolor sit amet',
                'stockkeeper_fk' => 1,
                'approver_fk' => 1,
                'created_at' => '2023-02-19 13:31:51',
                'created_by' => 1,
                'modified_at' => '2023-02-19 13:31:51',
                'modified_by' => 1,
                'deleted_at' => '2023-02-19 13:31:51',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
