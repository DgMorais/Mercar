<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableSales extends AbstractMigration
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
        $this->table('sales')
        ->addColumn('user_id', 'integer', [
            'null' => false
        ])
        ->addColumn('address_id', 'integer', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('valor', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 2,
        ])
        ->addColumn('cupom_id', 'integer', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('desconto', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 2,
        ])
        ->addColumn('valor_final', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 2,
        ])
        ->addColumn('destinatario', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('forma_pagamento', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 50
        ])
        ->addColumn('parcelas', 'integer', [
            'default' => null,
            'null' => true
        ])
        ->addColumn('liberado', 'boolean', [
            'default' => false,
            'null' => false
        ])
        ->addColumn('status_pagseguro', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 100
        ])
        ->addColumn('id_pagseguro', 'text', [
            'default' => null,
            'null' => true
        ])
        ->addColumn('created', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => false
        ])
        ->addColumn('modified', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => true
        ])
        ->addIndex(
            [
                'user_id',
                'address_id'
            ]
        )
        ->create();
    }
}
