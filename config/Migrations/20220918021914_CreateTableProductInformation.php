<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTableProductInformation extends AbstractMigration
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
        $table = $this->table('product_information')
        ->addColumn('product_id', 'integer', [
            'null' => false
        ])
        ->addColumn('weight', 'decimal', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('dimension', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('other_informations', 'text', [
            'null' => true,
            'default' => null
        ])
        ->addColumn('more_informations', 'text', [
            'null' => true,
            'default' => null
        ])
        ->create();
    }
}
