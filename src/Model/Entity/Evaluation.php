<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluation Entity
 *
 * @property int $id_evaluation
 * @property string $email
 * @property string $token
 * @property bool $state
 * @property int $age
 * @property string $gender
 * @property string $location
 * @property \Cake\I18n\FrozenTime $date
 * @property int $id_user_test
 */
class Evaluation extends Entity
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
        'id_evaluation'=>true,
        'email' => true,
        'token' => true,
        'state' => true,
        'age' => true,
        'gender' => true,
        'location' => true,
        'date' => true,
        'id_user_test' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
