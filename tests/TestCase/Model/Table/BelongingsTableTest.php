<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BelongingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BelongingsTable Test Case
 */
class BelongingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BelongingsTable
     */
    public $Belongings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.belongings',
        'app.users',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Belongings') ? [] : ['className' => BelongingsTable::class];
        $this->Belongings = TableRegistry::get('Belongings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Belongings);

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
