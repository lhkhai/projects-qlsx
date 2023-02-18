<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsReceivedNoteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsReceivedNoteTable Test Case
 */
class ProductsReceivedNoteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsReceivedNoteTable
     */
    protected $ProductsReceivedNote;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsReceivedNote',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductsReceivedNote') ? [] : ['className' => ProductsReceivedNoteTable::class];
        $this->ProductsReceivedNote = $this->getTableLocator()->get('ProductsReceivedNote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsReceivedNote);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsReceivedNoteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
