<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentTable Test Case
 */
class StudentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentTable
     */
    protected $Student;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Student',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Student') ? [] : ['className' => StudentTable::class];
        $this->Student = $this->getTableLocator()->get('Student', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Student);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\StudentTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
