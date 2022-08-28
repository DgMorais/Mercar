<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FavoritosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FavoritosTable Test Case
 */
class FavoritosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FavoritosTable
     */
    protected $Favoritos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Favoritos',
        'app.Products',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Favoritos') ? [] : ['className' => FavoritosTable::class];
        $this->Favoritos = $this->getTableLocator()->get('Favoritos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Favoritos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FavoritosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FavoritosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
