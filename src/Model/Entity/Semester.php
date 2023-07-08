<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Semester Entity
 *
 * @property int $id
 * @property int $branch_id
 * @property int $year
 * @property int $sem_number
 * @property int $fees
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Faculty[] $faculty
 * @property \App\Model\Entity\Student[] $student
 * @property \App\Model\Entity\Subject[] $subject
 */
class Semester extends Entity
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
        'branch_id' => true,
        'sem_number' => true,
        'year'=> true,
        'fees' => true,
        'created' => true,
        'modified' => true,
        'faculty' => true,
        'student' => true,
        'subject' => true,
    ];
}
