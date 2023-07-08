<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 * * @var \App\Model\Entity\Dividion $division
 *   @var \App\Model\Entity\Division $division
 *  @var \App\Model\Entity\Branch $branch
 *  @var \App\Model\Entity\Semseter $semester
 *  @var \App\Model\Entity\State $state
 *  @var \App\Model\Entity\City $city
 *
 * @property int $id
 * @property int $division_id
 * @property int $branch_id
 * @property int $semester_id
 * @property string $student_name
 * @property string $student_address
 * @property int $city_id
 * @property int $state_id
 * @property int $postalcode
 * @property int $phone_number
 * @property string $email
 * @property string $gender
 * @property string $image
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Student extends Entity
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
        'division_id' => true,
        'branch_id' => true,
         'semester_id' => true,
        'student_name' => true,
        'student_address' => true,
        'city_id' => true,
        'state_id' => true,
        'postalcode' => true,
        'phone_number' => true,
        'email' => true,
        'gender' => true,
        'image'=>true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ]; 
    
      /*  $this->belongsTo('Branch', [
            'foreignKey' => 'branch_id',
        ]);
        
        $this->belongsTo('City', [
            'foreignKey' => 'city_id',
        ]);
        $this->belongsTo('State', [
            'foreignKey' => 'state_id',
        ]);*/
    }

   
  



