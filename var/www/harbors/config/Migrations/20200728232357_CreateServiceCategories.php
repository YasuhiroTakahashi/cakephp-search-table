<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateServiceCategories extends AbstractMigration
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
        $table = $this->table('service_categories');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 作成者
        $table->addColumn('created_by', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 更新者
        $table->addColumn('modified_by', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // 作成日時
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        // 更新日時
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
