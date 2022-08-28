<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'sobrenome' => 'Lorem ipsum dolor sit amet',
                'slug' => 'Lorem ipsum dolor sit amet',
                'data_nascimento' => '2022-04-14',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'group_id' => 1,
                'created' => '2022-04-14 22:13:27',
                'cpf' => 'Lorem ipsum ',
                'modified' => '2022-04-14 22:13:27',
                'modified_by' => 1,
                'token' => 'Lorem ipsum dolor sit amet',
                'token_expires' => '2022-04-14 22:13:27',
                'last_login' => '2022-04-14 22:13:27',
                'avatar' => 'Lorem ipsum dolor sit amet',
                'genero' => 'Lorem ip',
                'telefone' => 'Lorem ipsum ',
                'celular' => 'Lorem ipsum d',
            ],
        ];
        parent::init();
    }
}
