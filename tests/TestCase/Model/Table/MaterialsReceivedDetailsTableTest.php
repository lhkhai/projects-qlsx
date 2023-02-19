<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialsReceivedDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialsReceivedDetailsTable Test Case
 */
class MaterialsReceivedDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialsReceivedDetailsTable
     */
    protected $MaterialsReceivedDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsReceivedDetails',
        'app.Materials',
        'app.MaterialsReceivedNotes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MaterialsReceivedDetails') ? [] : ['className' => MaterialsReceivedDetailsTable::class];
        $this->MaterialsReceivedDetails = $this->getTableLocator()->get('MaterialsReceivedDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MaterialsReceivedDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
