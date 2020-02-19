<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserTestsFixture
 */
class UserTestsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_user_test' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'url_page' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'max_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'id_test' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'username' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_test' => ['type' => 'index', 'columns' => ['id_test'], 'length' => []],
            'username' => ['type' => 'index', 'columns' => ['username'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_user_test'], 'length' => []],
            'user_tests_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_test'], 'references' => ['tests', 'id_test'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'user_tests_ibfk_2' => ['type' => 'foreign', 'columns' => ['username'], 'references' => ['users', 'username'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id_user_test' => 1,
                'url_page' => 'Lorem ipsum dolor sit amet',
                'max_date' => '2020-02-19 19:56:32',
                'id_test' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
