<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExammTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExammTable Test Case
 */
class ExammTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExammTable
     */
    protected $Examm;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Examm',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Examm') ? [] : ['className' => ExammTable::class];
        $this->Examm = $this->getTableLocator()->get('Examm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Examm);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExammTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
