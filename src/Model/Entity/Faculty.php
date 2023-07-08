<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faculty Entity
 *
 * @property int $id
 * @property int $subject_id
 * @property string $faculty_name
 * @property string $faculty_address
 * @property int $city_id
 * @property int $state_id
 * @property int $postalcode
 * @property int $semester_id
 * @property int $phone_number
 * @property int $experience
 * @property string $gender
 * @property string $qualification
 * @property int $salary
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Division[] $division
 */
class Faculty extends Entity
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
        'subject_id' => true,
        'faculty_name' => true,
        'faculty_address' => true,
        'city_id' => true,
        'state_id' => true,
        'postalcode' => true,
        'semester_id' => true,
        'phone_number' => true,
        'experience' => true,
        'gender' => true,
        'qualification' => true,
        'salary' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'division' => true,
    ];
}
