<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Cake\I18n\FrozenTime $date
 * @property int $id_users
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property int $active
 *
 * @property \App\Model\Entity\Photo[] $photos
 * @property \App\Model\Entity\VideosGallery[] $videos_gallery
 */
class News extends Entity
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
        'content' => true,
        'date' => true,
        'id_users' => true,
        'created_at' => true,
        'updated_at' => true,
        'active' => true,
        'photos' => true,
        'videos_gallery' => true
    ];
}
