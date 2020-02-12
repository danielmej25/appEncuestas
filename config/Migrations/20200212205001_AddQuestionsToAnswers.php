<?php
use Migrations\AbstractMigration;

class AddQuestionsToAnswers extends AbstractMigration
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
        $table = $this->table('answers');
        $table->addColumn('id_question', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey("id_question","questions","id_question",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->update();
    }
}
