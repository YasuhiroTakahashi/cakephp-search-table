<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationStatusesTable Test Case
 */
class ApplicationStatusesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationStatusesTable
     */
    protected $ApplicationStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ApplicationStatuses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApplicationStatuses') ? [] : ['className' => ApplicationStatusesTable::class];
        $this->ApplicationStatuses = TableRegistry::getTableLocator()->get('ApplicationStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ApplicationStatuses);

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
