<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobSeekerRowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobSeekerRowsTable Test Case
 */
class JobSeekerRowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobSeekerRowsTable
     */
    public $JobSeekerRows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_seeker_rows',
        'app.job_seekers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobSeekerRows') ? [] : ['className' => JobSeekerRowsTable::class];
        $this->JobSeekerRows = TableRegistry::get('JobSeekerRows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobSeekerRows);

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
