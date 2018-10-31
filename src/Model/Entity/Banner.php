<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property string $title
 * @property string $subtitle
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $active
 *
 * @property \App\Model\Entity\Page[] $pages
 * @property \App\Model\Entity\Photo[] $photos
 */
class Banner extends Entity
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
        'title' => true,
        'subtitle' => true,
        'created_at' => true,
        'updated_at' => true,
        'active' => true,
        'pages' => true,
        'photos' => true
    ];
}
