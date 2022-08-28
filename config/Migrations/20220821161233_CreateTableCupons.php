<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableCupons extends AbstractMigration
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
        $this->table('cupons')
        ->addColumn('category_id', 'integer', [
            'null' => true
        ])
        ->addColumn('tipo_desconto', 'integer', [
            'null' => false,
            'default' => 1
        ])
        ->addColumn('codigo', 'text', [
            'null' => false
        ])
        ->addColumn('valor_real', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 2,
            'default' => 0.00
        ])
        ->addColumn('valor_porcentagem', 'integer', [
            'null' => false,
            'default' => 0
        ])
        ->addColumn('qtd_usos', 'integer', [
            'null' => false,
            'default' => 0
        ])
        ->addColumn('status', 'boolean', [
            'null' => false,
            'default' => true
        ])
        ->addColumn('validade', 'datetime', [
            'default' => null,
            'limit' => null,
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
                'category_id'
            ]
        )
        ->create();
    }
}
