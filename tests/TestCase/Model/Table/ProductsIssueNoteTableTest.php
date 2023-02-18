<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsIssueNoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsIssueNoteTable Test Case
 */
class ProductsIssueNoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsIssueNoteTable
     */
    protected $ProductsIssueNote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsIssueNote',
        'app.Customers',
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
        $config = $this->getTableLocator()->exists('ProductsIssueNote') ? [] : ['className' => ProductsIssueNoteTable::class];
        $this->ProductsIssueNote = $this->getTableLocator()->get('ProductsIssueNote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsIssueNote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueNoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueNoteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
