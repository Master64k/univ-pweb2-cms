<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property string $photo_name
 * @property string $photo_title
 * @property int $page_id
 * @property int $news_id
 * @property int $banners_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $active
 *
 * @property \App\Model\Entity\Page[] $pages
 * @property \App\Model\Entity\News[] $news
 * @property \App\Model\Entity\Banner[] $banners
 */
class Photo extends Entity
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
        'photo_name' => true,
        'photo_title' => true,
        'page_id' => true,
        'news_id' => true,
        'banners_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'active' => true,
        'pages' => true,
        'news' => true,
        'banners' => true
    ];
}
