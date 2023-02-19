<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialsIssueNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialsIssueNotesTable Test Case
 */
class MaterialsIssueNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialsIssueNotesTable
     */
    protected $MaterialsIssueNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsIssueNotes',
        'app.Receivers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MaterialsIssueNotes') ? [] : ['className' => MaterialsIssueNotesTable::class];
        $this->MaterialsIssueNotes = $this->getTableLocator()->get('MaterialsIssueNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MaterialsIssueNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsIssueNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsIssueNotesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
