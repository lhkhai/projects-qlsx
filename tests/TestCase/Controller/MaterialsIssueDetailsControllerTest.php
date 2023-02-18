<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MaterialsIssueDetailsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MaterialsIssueDetailsController Test Case
 *
 * @uses \App\Controller\MaterialsIssueDetailsController
 */
class MaterialsIssueDetailsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MaterialsIssueDetails',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\MaterialsIssueDetailsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\MaterialsIssueDetailsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\MaterialsIssueDetailsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\MaterialsIssueDetailsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\MaterialsIssueDetailsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
