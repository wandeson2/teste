<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdministratorsHealthUnit Entity
 *
 * @property int $id
 * @property int $health_unit_id
 * @property int $administrator_id
 *
 * @property \App\Model\Entity\HealthUnit $health_unit
 * @property \App\Model\Entity\Administrator $administrator
 */
class AdministratorsHealthUnit extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'health_unit_id' => true,
        'administrator_id' => true,
        'health_unit' => true,
        'administrator' => true
    ];
}
