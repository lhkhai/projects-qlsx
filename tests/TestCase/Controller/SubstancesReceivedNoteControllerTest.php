<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\SubstancesReceivedNoteController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\SubstancesReceivedNoteController Test Case
 *
 * @uses \App\Controller\SubstancesReceivedNoteController
 */
class SubstancesReceivedNoteControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SubstancesReceivedNote',
        'app.Products',
        'app.Receivers',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\SubstancesReceivedNoteController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\SubstancesReceivedNoteController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\SubstancesReceivedNoteController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\SubstancesReceivedNoteController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\SubstancesReceivedNoteController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
