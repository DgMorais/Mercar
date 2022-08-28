<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoutinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoutinesTable Test Case
 */
class RoutinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoutinesTable
     */
    protected $Routines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Routines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Routines') ? [] : ['className' => RoutinesTable::class];
        $this->Routines = $this->getTableLocator()->get('Routines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Routines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RoutinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test createRoutine method
     *
     * @return void
     * @uses \App\Model\Table\RoutinesTable::createRoutine()
     */
    public function testCreateRoutine(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
