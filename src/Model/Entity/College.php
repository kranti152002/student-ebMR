<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * College Entity
 *
 * @property int $id
 * @property string $college_name
 * @property string $principal_name
 * @property int $phone_number
 * @property string $address
 * @property int $city_id
 * @property int $state_id
 * @property int $postalcode
 * @property string $website
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Domain[] $domain
 */
class College extends Entity
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
        'college_name' => true,
        'principal_name '=>true,
        'phone_number' => true,
        'address' => true,
        'city_id' => true,
        'state_id' => true,
        'postalcode' => true,
        'website' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'domain' => true,
    ];
}
