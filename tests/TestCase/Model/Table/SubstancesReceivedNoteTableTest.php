<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubstancesReceivedNoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubstancesReceivedNoteTable Test Case
 */
class SubstancesReceivedNoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubstancesReceivedNoteTable
     */
    protected $SubstancesReceivedNote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubstancesReceivedNote',
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
        $config = $this->getTableLocator()->exists('SubstancesReceivedNote') ? [] : ['className' => SubstancesReceivedNoteTable::class];
        $this->SubstancesReceivedNote = $this->getTableLocator()->get('SubstancesReceivedNote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SubstancesReceivedNote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesReceivedNoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesReceivedNoteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
