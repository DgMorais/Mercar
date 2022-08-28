<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTablePaymentsQueue extends AbstractMigration
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
        $this->table('payments_queue')
        ->addColumn('sale_id', 'integer', [
            'null' => false
        ])
        ->addColumn('data_raw', 'text', [
            'null' => false
        ])
        ->addColumn('begin', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => true
        ])
        ->addColumn('end', 'datetime', [
            'default' => null,
            'limit' => null,
            'null' => true
        ])
        ->addColumn('status', 'integer', [
            'null' => false,
            'default' => 0
        ])
        ->addColumn('tries', 'integer', [
            'null' => false,
            'default' => 0
        ])
        ->addColumn('erros', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('response', 'text', [
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
                'sale_id'
            ]
        )
        ->create();
    }
}
