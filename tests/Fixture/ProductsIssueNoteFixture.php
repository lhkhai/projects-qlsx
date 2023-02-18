<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsIssueNoteFixture
 */
class ProductsIssueNoteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'products_issue_note';
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
                'customer_id' => 1,
                'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'note_maker' => 1,
                'receiver_id' => 1,
                'stockkeeper_fk' => 1,
                'approver_fk' => 1,
                'created_at' => '2023-02-07 07:43:14',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:43:14',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:43:14',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
