<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VideosGallery Entity
 *
 * @property int $id
 * @property int $news_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $active
 *
 * @property \App\Model\Entity\News $news
 */
class VideosGallery extends Entity
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
        'news_id' => true,
        'name' => true,
        'created_at' => true,
        'updated_at' => true,
        'active' => true,
        'news' => true
    ];
}
