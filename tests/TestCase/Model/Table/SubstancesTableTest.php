<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubstancesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubstancesTable Test Case
 */
class SubstancesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubstancesTable
     */
    protected $Substances;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Substances',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Substances') ? [] : ['className' => SubstancesTable::class];
        $this->Substances = $this->getTableLocator()->get('Substances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Substances);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SubstancesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
