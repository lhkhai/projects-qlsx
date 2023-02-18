<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProductsReceivedNoteController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProductsReceivedNoteController Test Case
 *
 * @uses \App\Controller\ProductsReceivedNoteController
 */
class ProductsReceivedNoteControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsReceivedNote',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ProductsReceivedNoteController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ProductsReceivedNoteController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ProductsReceivedNoteController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ProductsReceivedNoteController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ProductsReceivedNoteController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
