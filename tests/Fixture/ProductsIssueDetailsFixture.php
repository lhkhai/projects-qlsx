<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsIssueDetailsFixture
 */
class ProductsIssueDetailsFixture extends TestFixture
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
                'product_issue_note_id' => 1,
                'product_id' => 1,
                'created_at' => '2023-02-19 13:13:46',
                'created_by' => 1,
                'modified_at' => '2023-02-19 13:13:46',
                'modified_by' => 1,
                'deleted_at' => '2023-02-19 13:13:46',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
