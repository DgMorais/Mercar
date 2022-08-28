<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrecosFixture
 */
class PrecosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'product_id' => 1,
                'preco_de' => 1.5,
                'preco_por' => 1.5,
                'status' => 1,
                'created' => '2022-04-21 13:44:56',
                'modified' => '2022-04-21 13:44:56',
            ],
        ];
        parent::init();
    }
}
