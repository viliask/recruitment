<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CodesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CodesTable Test Case
 */
class CodesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CodesTable
     */
    protected $Codes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Codes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Codes') ? [] : ['className' => CodesTable::class];
        $this->Codes = $this->getTableLocator()->get('Codes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Codes);

        parent::tearDown();
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
}
