<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Page Entity
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $slug
 * @property int $banner_id
 * @property int $photos_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $active
 *
 * @property \App\Model\Entity\Banner $banner
 * @property \App\Model\Entity\Photo[] $photos
 */
class Page extends Entity
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
        'text' => true,
        'slug' => true,
        'banner_id' => true,
        'photos_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'active' => true,
        'banner' => true,
        'photos' => true
    ];
}
