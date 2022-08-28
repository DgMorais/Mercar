<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentsQueueTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentsQueueTable Test Case
 */
class PaymentsQueueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentsQueueTable
     */
    protected $PaymentsQueue;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PaymentsQueue',
        'app.Sales',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PaymentsQueue') ? [] : ['className' => PaymentsQueueTable::class];
        $this->PaymentsQueue = $this->getTableLocator()->get('PaymentsQueue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PaymentsQueue);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaymentsQueueTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PaymentsQueueTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test createPayments method
     *
     * @return void
     * @uses \App\Model\Table\PaymentsQueueTable::createPayments()
     */
    public function testCreatePayments(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
