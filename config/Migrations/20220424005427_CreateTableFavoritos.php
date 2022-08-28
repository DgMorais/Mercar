<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableFavoritos extends AbstractMigration
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
        $this->table('favoritos')
        ->addColumn('product_id', 'integer', [
            'null' => false
        ])
        ->addColumn('user_id', 'integer', [
            'null' => false
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
                'product_id',
            ]
        )
        ->addIndex(
            [
                'user_id',
            ]
        )
        ->create();
    }
}
