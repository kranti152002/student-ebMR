<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DomainTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DomainTable Test Case
 */
class DomainTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DomainTable
     */
    protected $Domain;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
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
        $config = $this->getTableLocator()->exists('Domain') ? [] : ['className' => DomainTable::class];
        $this->Domain = $this->getTableLocator()->get('Domain', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Domain);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DomainTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
