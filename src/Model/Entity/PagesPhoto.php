<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PagesPhoto Entity
 *
 * @property int $id
 * @property int $page_id
 * @property int $photo_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $update_at
 * @property int $active
 *
 * @property \App\Model\Entity\Page $page
 * @property \App\Model\Entity\Photo $photo
 */
class PagesPhoto extends Entity
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
        'page_id' => true,
        'photo_id' => true,
        'created_at' => true,
        'update_at' => true,
        'active' => true,
        'page' => true,
        'photo' => true
    ];
}
