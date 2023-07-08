<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CollegeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CollegeTable Test Case
 */
class CollegeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CollegeTable
     */
    protected $College;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.College',
        'app.Domain',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('College') ? [] : ['className' => CollegeTable::class];
        $this->College = $this->getTableLocator()->get('College', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->College);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CollegeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
