<?php
use Migrations\AbstractMigration;

class AddUsersToUserTests extends AbstractMigration
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
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addForeignKey("username","users","username",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->update();
    }
}
