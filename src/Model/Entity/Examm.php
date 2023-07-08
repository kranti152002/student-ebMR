<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Examm Entity
 *
 * @property int $id
 * @property int $college_id
 * @property int $student_id
 * @property int $subject_id
 * @property int $semester_id
 * @property int $marks
 */
class Examm extends Entity
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
        'college_id'=>true,
        'student_id' => true,
        'subject_id' => true,
        'semester_id' =>true,
        'marks' => true,
    ];
}
