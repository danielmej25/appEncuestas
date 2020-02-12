<?php
use Migrations\AbstractMigration;

class CreateQuestions extends AbstractMigration
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
        $table = $this->table('questions',['id'=>'false', "primary_key"=>'id_questions']);
        $table->addColumn('id_questions', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('description_questions', 'string', [
            'default' => null,
            'limit' => 1024,
            'null' => false,
        ]);
        $table->create();
    }
}
