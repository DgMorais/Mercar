<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CuponsFixture
 */
class CuponsFixture extends TestFixture
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
                'category_id' => 1,
                'tipo_desconto' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'valor_real' => 1.5,
                'valor_porcentagem' => 1,
                'qtd_usos' => 1,
                'status' => 1,
                'validade' => '2022-08-21 17:18:01',
                'created' => '2022-08-21 17:18:01',
                'modified' => '2022-08-21 17:18:01',
            ],
        ];
        parent::init();
    }
}
