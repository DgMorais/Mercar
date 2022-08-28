<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponseQueueTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponseQueueTable Test Case
 */
class ResponseQueueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponseQueueTable
     */
    protected $ResponseQueue;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ResponseQueue',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ResponseQueue') ? [] : ['className' => ResponseQueueTable::class];
        $this->ResponseQueue = $this->getTableLocator()->get('ResponseQueue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ResponseQueue);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResponseQueueTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
