<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BannersPhotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BannersPhotosTable Test Case
 */
class BannersPhotosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BannersPhotosTable
     */
    public $BannersPhotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.banners_photos',
        'app.banners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BannersPhotos') ? [] : ['className' => BannersPhotosTable::class];
        $this->BannersPhotos = TableRegistry::getTableLocator()->get('BannersPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BannersPhotos);

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
