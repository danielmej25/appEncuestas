<?php
use Migrations\AbstractMigration;

class AddTestsToUserTests extends AbstractMigration
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
        $table = $this->table('user_tests');
        $table->addColumn('id_test', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey("id_test","tests","id_test",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->update();
    }
}
