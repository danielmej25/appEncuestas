<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserTest Entity
 *
 * @property int $id_user_test
 * @property string $url_page
 * @property \Cake\I18n\FrozenTime $max_date
 * @property int $id_test
 * @property string $username
 */
class UserTest extends Entity
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
        'id_user_test'=>true,
        'url_page' => true,
        'max_date' => true,
        'id_test' => true,
        'username' => true,
    ];
}
