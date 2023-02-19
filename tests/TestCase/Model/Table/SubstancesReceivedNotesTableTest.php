<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubstancesReceivedNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubstancesReceivedNotesTable Test Case
 */
class SubstancesReceivedNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubstancesReceivedNotesTable
     */
    protected $SubstancesReceivedNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubstancesReceivedNotes',
        'app.Products',
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
        $config = $this->getTableLocator()->exists('SubstancesReceivedNotes') ? [] : ['className' => SubstancesReceivedNotesTable::class];
        $this->SubstancesReceivedNotes = $this->getTableLocator()->get('SubstancesReceivedNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SubstancesReceivedNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesReceivedNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesReceivedNotesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
