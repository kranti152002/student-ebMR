<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Branch Entity
 *
 * @property int $id
 * @property int $Domain_id
 * @property string $Branch_name
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Division[] $division
 * @property \App\Model\Entity\Semester[] $semester
 * @property \App\Model\Entity\Student[] $student
 */
class Branch extends Entity
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
        'Domain_id' => true,
        'Branch_name' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'division' => true,
        'semester' => true,
        'student' => true,
    ];
}
