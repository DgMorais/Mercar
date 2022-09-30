<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
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
        $this->table('products')
            ->addColumn('user_id', 'integer', [
                'null' => false
            ])
            ->addColumn('store_id', 'integer', [
                'default' => null,
                'null' => true
            ])
            ->addColumn('nome', 'string', [
                'limit' => 1000,
                'null' => false,
            ])
            ->addColumn('descricao', 'text', [
                'null' => false
            ])
            ->addColumn('slug', 'text', [
                'null' => false
            ])
            ->addColumn('status', 'boolean', [
                'default' => true,
                'null' => false
            ])
            ->addColumn('images', 'text', [
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
            ->addIndex(
                [
                    'store_id',
                ]
            )
            ->create();
    }
}
