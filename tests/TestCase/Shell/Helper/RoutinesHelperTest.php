<?php
declare(strict_types=1);

namespace App\Test\TestCase\Shell\Helper;

use App\Shell\Helper\RoutinesHelper;
use Cake\Console\ConsoleIo;
use Cake\TestSuite\Stub\ConsoleOutput;
use Cake\TestSuite\TestCase;

/**
 * App\Shell\Helper\RoutinesHelper Test Case
 */
class RoutinesHelperTest extends TestCase
{
    /**
     * ConsoleOutput stub
     *
     * @var \Cake\TestSuite\Stub\ConsoleOutput
     */
    protected $stub;

    /**
     * ConsoleIo mock
     *
     * @var \Cake\Console\ConsoleIo
     */
    protected $io;

    /**
     * Test subject
     *
     * @var \App\Shell\Helper\RoutinesHelper
     */
    protected $Routines;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->stub = new ConsoleOutput();
        $this->io = new ConsoleIo($this->stub);
        $this->Routines = new RoutinesHelper($this->io);
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
     * Test output method
     *
     * @return void
     * @uses \App\Shell\Helper\RoutinesHelper::output()
     */
    public function testOutput(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
