<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubstancesIssueDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubstancesIssueDetailsTable Test Case
 */
class SubstancesIssueDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubstancesIssueDetailsTable
     */
    protected $SubstancesIssueDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubstancesIssueDetails',
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
        $config = $this->getTableLocator()->exists('SubstancesIssueDetails') ? [] : ['className' => SubstancesIssueDetailsTable::class];
        $this->SubstancesIssueDetails = $this->getTableLocator()->get('SubstancesIssueDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SubstancesIssueDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesIssueDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesIssueDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
