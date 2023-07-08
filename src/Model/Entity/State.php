<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity
 *
 * @property int $id
 * @property string $state_name
 * @property int $state_code
 * @property string $abbreviation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\City[] $city
 * @property \App\Model\Entity\College[] $college
 * @property \App\Model\Entity\Faculty[] $faculty
 * @property \App\Model\Entity\Student[] $student
 */
class State extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'state_name' => true,
        'state_code' => true,
        'abbreviation' => true,
        'created' => true,
        'modified' => true,
        'city' => true,
        'college' => true,
        'faculty' => true,
        'student' => true,
    ];
}
