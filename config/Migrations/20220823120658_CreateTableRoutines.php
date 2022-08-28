<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableRoutines extends AbstractMigration
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
        $this->table('routines')
        ->addColumn('command', 'text', [
            'null' => false
        ])
        ->addColumn('parameters', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('status', 'integer', [
            'null' => false,
            'default' => 0
        ])
        ->addColumn('tries', 'integer', [
            'null' => false,
            'default' => 0
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
        ->addColumn('erros', 'text', [
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
        ->create();
    }
}
