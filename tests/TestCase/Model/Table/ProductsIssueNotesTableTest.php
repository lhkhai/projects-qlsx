<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsIssueNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsIssueNotesTable Test Case
 */
class ProductsIssueNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsIssueNotesTable
     */
    protected $ProductsIssueNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsIssueNotes',
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
        $config = $this->getTableLocator()->exists('ProductsIssueNotes') ? [] : ['className' => ProductsIssueNotesTable::class];
        $this->ProductsIssueNotes = $this->getTableLocator()->get('ProductsIssueNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsIssueNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueNotesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
