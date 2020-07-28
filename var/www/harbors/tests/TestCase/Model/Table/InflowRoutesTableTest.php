<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InflowRoutesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InflowRoutesTable Test Case
 */
class InflowRoutesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InflowRoutesTable
     */
    protected $InflowRoutes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.InflowRoutes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InflowRoutes') ? [] : ['className' => InflowRoutesTable::class];
        $this->InflowRoutes = TableRegistry::getTableLocator()->get('InflowRoutes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->InflowRoutes);

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
