<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsReceivedDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsReceivedDetailsTable Test Case
 */
class ProductsReceivedDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsReceivedDetailsTable
     */
    protected $ProductsReceivedDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsReceivedDetails',
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
        $config = $this->getTableLocator()->exists('ProductsReceivedDetails') ? [] : ['className' => ProductsReceivedDetailsTable::class];
        $this->ProductsReceivedDetails = $this->getTableLocator()->get('ProductsReceivedDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsReceivedDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsReceivedDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductsReceivedDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
