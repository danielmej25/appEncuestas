<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTestsTable Test Case
 */
class UserTestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTestsTable
     */
    public $UserTests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserTests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserTests') ? [] : ['className' => UserTestsTable::class];
        $this->UserTests = TableRegistry::getTableLocator()->get('UserTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTests);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
