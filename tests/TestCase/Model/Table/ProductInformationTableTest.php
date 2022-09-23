<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductInformationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductInformationTable Test Case
 */
class ProductInformationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductInformationTable
     */
    protected $ProductInformation;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductInformation',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductInformation') ? [] : ['className' => ProductInformationTable::class];
        $this->ProductInformation = $this->getTableLocator()->get('ProductInformation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductInformation);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductInformationTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
