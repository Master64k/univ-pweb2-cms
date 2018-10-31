<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PhotosFixture
 *
 */
class PhotosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'photo_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'photo_title' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'page_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'news_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'banners_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'photos_pagesphotos_fk_idx' => ['type' => 'index', 'columns' => ['page_id'], 'length' => []],
            'photos_bannersphotos_fk_idx' => ['type' => 'index', 'columns' => ['banners_id'], 'length' => []],
            'photos_newsphotos_fk_idx' => ['type' => 'index', 'columns' => ['news_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'photos_bannersphotos_fk' => ['type' => 'foreign', 'columns' => ['banners_id'], 'references' => ['banners_photos', 'id'], 'update' => 'noAction', 'delete' => 'restrict', 'length' => []],
            'photos_newsphotos_fk' => ['type' => 'foreign', 'columns' => ['news_id'], 'references' => ['news_photos', 'id'], 'update' => 'noAction', 'delete' => 'restrict', 'length' => []],
            'photos_pagesphotos_fk' => ['type' => 'foreign', 'columns' => ['page_id'], 'references' => ['pages_photos', 'id'], 'update' => 'noAction', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'photo_name' => 'Lorem ipsum dolor sit amet',
                'photo_title' => 'Lorem ipsum dolor sit amet',
                'page_id' => 1,
                'news_id' => 1,
                'banners_id' => 1,
                'created_at' => 1540952467,
                'updated_at' => 1540952467,
                'active' => 1
            ],
        ];
        parent::init();
    }
}
