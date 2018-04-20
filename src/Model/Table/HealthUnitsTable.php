<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HealthUnits Model
 *
 * @property |\Cake\ORM\Association\BelongsToMany $Administrators
 *
 * @method \App\Model\Entity\HealthUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\HealthUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HealthUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HealthUnit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HealthUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HealthUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HealthUnit findOrCreate($search, callable $callback = null, $options = [])
 */
class HealthUnitsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('health_units');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Administrators', [
            'foreignKey' => 'health_unit_id',
            'targetForeignKey' => 'administrator_id',
            'joinTable' => 'administrators_health_units'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 500)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 12)
            ->requirePresence('telephone', 'create')
            ->notEmpty('telephone');

        $validator
            ->scalar('CEP')
            ->maxLength('CEP', 10)
            ->requirePresence('CEP', 'create')
            ->notEmpty('CEP');

        $validator
            ->scalar('complete_address')
            ->maxLength('complete_address', 500)
            ->allowEmpty('complete_address');

        $validator
            ->scalar('latitude')
            ->maxLength('latitude', 100)
            ->allowEmpty('latitude');

        $validator
            ->scalar('longitude')
            ->maxLength('longitude', 100)
            ->allowEmpty('longitude');

        return $validator;
    }
}
