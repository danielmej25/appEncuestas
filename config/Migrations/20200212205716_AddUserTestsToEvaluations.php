<?php
use Migrations\AbstractMigration;

class AddUserTestsToEvaluations extends AbstractMigration
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
        $table = $this->table('evaluations');
        $table->addColumn('id_user_test', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey("id_user_test","user_tests","id_user_test",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->update();
    }
}
