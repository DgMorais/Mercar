<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCategoriesTable extends AbstractMigration
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
        $this->table('categories')
            ->addColumn('nome', 'string', [
                'limit' => 250,
                'null' => false,
            ])
            ->addColumn('slug', 'string', [
                'limit' => 100,
                'null' => false
            ])
            ->addColumn('status', 'boolean', [
                'default' => true,
                'null' => false
            ])
            ->addColumn('image', 'text', [
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
            ->create();
    }
}
