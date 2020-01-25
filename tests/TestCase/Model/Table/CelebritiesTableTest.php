<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CelebritiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CelebritiesTable Test Case
 */
class CelebritiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CelebritiesTable
     */
    protected $Celebrities;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Celebrities',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Celebrities') ? [] : ['className' => CelebritiesTable::class];
        $this->Celebrities = TableRegistry::getTableLocator()->get('Celebrities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Celebrities);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
