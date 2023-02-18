<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MaterialsReceivedNoteController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MaterialsReceivedNoteController Test Case
 *
 * @uses \App\Controller\MaterialsReceivedNoteController
 */
class MaterialsReceivedNoteControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\MaterialsReceivedNoteController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\MaterialsReceivedNoteController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\MaterialsReceivedNoteController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\MaterialsReceivedNoteController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\MaterialsReceivedNoteController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
