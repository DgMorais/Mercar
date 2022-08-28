<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableUserRequests extends AbstractMigration
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
        $this->table('user_requests')
        ->addColumn('sale_id', 'integer', [
            'null' => false
        ])
        ->addColumn('product_id', 'integer', [
            'null' => false
        ])
        ->addColumn('valor', 'decimal', [
            'null' => false,
            'precision' => 10,
            'scale' => 2,
        ])
        ->addColumn('liberado', 'boolean', [
            'null' => false,
            'default' => false
        ])
        ->addColumn('observacoes', 'text', [
            'null' => true,
            'default' => null
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
                'sale_id',
                'product_id',
            ]
        )
        ->create();
    }
}
