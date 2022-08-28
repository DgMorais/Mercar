<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponseQueueFixture
 */
class ResponseQueueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'response_queue';
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
                'payment_id' => 1,
                'data_raw' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'redirect' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'tries' => 1,
                'begin' => '2022-08-23 13:18:59',
                'end' => '2022-08-23 13:18:59',
                'erros' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2022-08-23 13:18:59',
                'modified' => '2022-08-23 13:18:59',
            ],
        ];
        parent::init();
    }
}
