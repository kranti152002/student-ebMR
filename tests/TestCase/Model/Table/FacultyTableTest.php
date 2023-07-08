<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacultyTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacultyTable Test Case
 */
class FacultyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacultyTable
     */
    protected $Faculty;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Faculty',
        'app.Division',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Faculty') ? [] : ['className' => FacultyTable::class];
        $this->Faculty = $this->getTableLocator()->get('Faculty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Faculty);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FacultyTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
