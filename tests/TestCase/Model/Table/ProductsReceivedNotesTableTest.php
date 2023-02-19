<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsReceivedNotesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsReceivedNotesTable Test Case
 */
class ProductsReceivedNotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsReceivedNotesTable
     */
    protected $ProductsReceivedNotes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsReceivedNotes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductsReceivedNotes') ? [] : ['className' => ProductsReceivedNotesTable::class];
        $this->ProductsReceivedNotes = $this->getTableLocator()->get('ProductsReceivedNotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsReceivedNotes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsReceivedNotesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
