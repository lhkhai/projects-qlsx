<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialsReceivedNoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialsReceivedNoteTable Test Case
 */
class MaterialsReceivedNoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialsReceivedNoteTable
     */
    protected $MaterialsReceivedNote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsReceivedNote',
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
        $config = $this->getTableLocator()->exists('MaterialsReceivedNote') ? [] : ['className' => MaterialsReceivedNoteTable::class];
        $this->MaterialsReceivedNote = $this->getTableLocator()->get('MaterialsReceivedNote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MaterialsReceivedNote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedNoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedNoteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
