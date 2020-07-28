<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationUsersTable Test Case
 */
class ApplicationUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationUsersTable
     */
    protected $ApplicationUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ApplicationUsers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApplicationUsers') ? [] : ['className' => ApplicationUsersTable::class];
        $this->ApplicationUsers = TableRegistry::getTableLocator()->get('ApplicationUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ApplicationUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
