<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorporateUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorporateUsersTable Test Case
 */
class CorporateUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CorporateUsersTable
     */
    public $CorporateUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.corporate_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CorporateUsers') ? [] : ['className' => CorporateUsersTable::class];
        $this->CorporateUsers = TableRegistry::get('CorporateUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CorporateUsers);

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
