<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('users')
            ->addColumn('nome', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('sobrenome', 'string', [
                'default' => null,
                'limit' => 250,
                'null' => true,
            ])
            ->addColumn('slug', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('data_nascimento', 'date', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('email', 'string', [
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('password', 'string', [
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('status', 'boolean', [
                'default' => true,
                'null' => false
            ])
            ->addColumn('group_id', 'integer', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('cpf', 'string', [
                'default' => null,
                'limit' => 14,
                'null' => true,
            ])
            ->addColumn('modified_by', 'integer', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('token', 'string', [
                'default' => null,
                'limit' => 32,
                'null' => true
            ])
            ->addColumn('token_expires', 'datetime', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('last_login', 'datetime', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('avatar', 'string', [
                'default' => null,
                'limit' => 400,
                'null' => true
            ])
            ->addColumn('genero', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => true
            ])
            ->addColumn('telefone', 'string', [
                'default' => null,
                'limit' => 14,
                'null' => true
            ])
            ->addColumn('celular', 'string', [
                'default' => null,
                'limit' => 15,
                'null' => true
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->addIndex(
                [
                    'email',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'group_id',
                ]
            )
            ->addIndex(
                [
                    'token',
                ]
            )
            ->addIndex(
                [
                    'cpf',
                ]
            )
            ->create();
    }
}
