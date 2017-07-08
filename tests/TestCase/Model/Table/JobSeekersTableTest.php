<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobSeekersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobSeekersTable Test Case
 */
class JobSeekersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobSeekersTable
     */
    public $JobSeekers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_seekers',
        'app.job_seeker_rows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JobSeekers') ? [] : ['className' => JobSeekersTable::class];
        $this->JobSeekers = TableRegistry::get('JobSeekers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobSeekers);

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
