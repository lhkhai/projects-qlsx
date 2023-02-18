<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsIssueDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsIssueDetailsTable Test Case
 */
class ProductsIssueDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsIssueDetailsTable
     */
    protected $ProductsIssueDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsIssueDetails',
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
        $config = $this->getTableLocator()->exists('ProductsIssueDetails') ? [] : ['className' => ProductsIssueDetailsTable::class];
        $this->ProductsIssueDetails = $this->getTableLocator()->get('ProductsIssueDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsIssueDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductsIssueDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
