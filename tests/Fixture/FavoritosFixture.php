<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FavoritosFixture
 */
class FavoritosFixture extends TestFixture
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
                'user_id' => 1,
                'created' => '2022-04-24 20:48:36',
                'modified' => '2022-04-24 20:48:36',
            ],
        ];
        parent::init();
    }
}
