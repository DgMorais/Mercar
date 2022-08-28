<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableEnderecos extends AbstractMigration
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
        $this->table('enderecos')
            ->addColumn('user_id', 'integer', [
                'null' => false
            ])
            ->addColumn('cep', 'string', [
                'limit' => 9,
                'null' => false
            ])
            ->addColumn('rua', 'string', [
                'limit' => 500,
                'null' => false,
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
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('cidade', 'string', [
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('estado', 'string', [
                'limit' => 10,
                'null' => false
            ])
            ->addColumn('created', 'datetime', [
                'limit' => null,
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->create();
    }
}
