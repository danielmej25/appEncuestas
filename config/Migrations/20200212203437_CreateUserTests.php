<?php
use Migrations\AbstractMigration;

class CreateUserTests extends AbstractMigration
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
        $table = $this->table('user_tests',['id'=>false, "primary_key"=>'id_user_test']);
        $table->addColumn('id_user_test', 'integer', [
            'default' => null,
            'autoIncrement' => true,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('url_page', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('max_date', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
