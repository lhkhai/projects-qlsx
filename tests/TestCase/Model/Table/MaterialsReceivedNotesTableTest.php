<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialsReceivedNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialsReceivedNotesTable Test Case
 */
class MaterialsReceivedNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialsReceivedNotesTable
     */
    protected $MaterialsReceivedNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsReceivedNotes',
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
        $config = $this->getTableLocator()->exists('MaterialsReceivedNotes') ? [] : ['className' => MaterialsReceivedNotesTable::class];
        $this->MaterialsReceivedNotes = $this->getTableLocator()->get('MaterialsReceivedNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MaterialsReceivedNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaterialsReceivedNotesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
