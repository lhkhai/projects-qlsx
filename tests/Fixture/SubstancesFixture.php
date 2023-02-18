<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubstancesFixture
 */
class SubstancesFixture extends TestFixture
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
                'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created_at' => '2023-02-07 07:18:40',
                'created_by' => 1,
                'modified_at' => '2023-02-07 07:18:40',
                'modified_by' => 1,
                'deleted_at' => '2023-02-07 07:18:40',
                'deleted_by' => 1,
            ],
        ];
        parent::init();
    }
}
