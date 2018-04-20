<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministratorsHealthUnitsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministratorsHealthUnitsTable Test Case
 */
class AdministratorsHealthUnitsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministratorsHealthUnitsTable
     */
    public $AdministratorsHealthUnits;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.administrators_health_units',
        'app.health_units',
        'app.administrators'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AdministratorsHealthUnits') ? [] : ['className' => AdministratorsHealthUnitsTable::class];
        $this->AdministratorsHealthUnits = TableRegistry::get('AdministratorsHealthUnits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AdministratorsHealthUnits);

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
