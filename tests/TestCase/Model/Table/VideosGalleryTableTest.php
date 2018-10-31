<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VideosGalleryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VideosGalleryTable Test Case
 */
class VideosGalleryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VideosGalleryTable
     */
    public $VideosGallery;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.videos_gallery',
        'app.news'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VideosGallery') ? [] : ['className' => VideosGalleryTable::class];
        $this->VideosGallery = TableRegistry::getTableLocator()->get('VideosGallery', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VideosGallery);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
