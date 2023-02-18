<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialsIssueDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialsIssueDetailsTable Test Case
 */
class MaterialsIssueDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialsIssueDetailsTable
     */
    protected $MaterialsIssueDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsIssueDetails',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MaterialsIssueDetails') ? [] : ['className' => MaterialsIssueDetailsTable::class];
        $this->MaterialsIssueDetails = $this->getTableLocator()->get('MaterialsIssueDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MaterialsIssueDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsIssueDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsIssueDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
