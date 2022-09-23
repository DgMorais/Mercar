<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePrecosTable extends AbstractMigration
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
        $this->table('precos')
            ->addColumn('product_id', 'integer', [
                'null' => false
            ])
            ->addColumn('preco_de', 'decimal', [
                'null' => true,
                'precision' => 20,
                'scale' => 2,
            ])
            ->addColumn('preco_por', 'decimal', [
                'null' => false,
                'precision' => 20,
                'scale' => 2,
            ])
            ->addColumn('status', 'boolean', [
                'default' => true,
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
            ->create();
    }
}
