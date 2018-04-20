<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdministratorsHealthUnitsFixture
 *
 */
class AdministratorsHealthUnitsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'health_unit_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'administrator_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'health_unit_id' => ['type' => 'index', 'columns' => ['health_unit_id'], 'length' => []],
            'administrator_id' => ['type' => 'index', 'columns' => ['administrator_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'administrators_health_units_ibfk_1' => ['type' => 'foreign', 'columns' => ['health_unit_id'], 'references' => ['health_units', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'administrators_health_units_ibfk_2' => ['type' => 'foreign', 'columns' => ['administrator_id'], 'references' => ['administrators', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'id' => 1,
                'health_unit_id' => 1,
                'administrator_id' => 1
            ],
        ];
        parent::init();
    }
}
