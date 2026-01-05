<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubjectTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubjectTable Test Case
 */
class SubjectTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubjectTable
     */
    protected $Subject;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Subject',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Subject') ? [] : ['className' => SubjectTable::class];
        $this->Subject = $this->getTableLocator()->get('Subject', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Subject);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SubjectTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
