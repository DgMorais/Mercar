<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateStoresTable extends AbstractMigration
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
        $this->table('stores')
        ->addColumn('user_id', 'integer', [
            'null' => false
        ])
        ->addColumn('nome', 'string', [
            'limit' => 300,
            'null' => false,
        ])
        ->addColumn('descricao', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('cnpj', 'string', [
            'limit' => 18,
            'null' => true,
            'default' => null,
        ])
        ->addColumn('cep', 'string', [
            'default' => null,
            'limit' => 9,
            'null' => true
        ])
        ->addColumn('endereco', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
        ])
        ->addColumn('numero', 'integer', [
            'default' => null,
            'null' => true,
        ])
        ->addColumn('complemento', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => true,
        ])
        ->addColumn('bairro', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => true,
        ])
        ->addColumn('cidade', 'string', [
            'default' => null,
            'limit' => 200,
            'null' => true,
        ])
        ->addColumn('estado', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => true
        ])
        ->addColumn('slug', 'string', [
            'limit' => 100,
            'null' => false
        ])
        ->addColumn('status', 'boolean', [
            'default' => true,
            'null' => false
        ])
        ->addColumn('logo', 'text', [
            'default' => null,
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
                'user_id',
            ]
        )
        ->create();
    }
}
