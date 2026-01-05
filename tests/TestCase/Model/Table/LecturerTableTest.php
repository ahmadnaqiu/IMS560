<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LecturerTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LecturerTable Test Case
 */
class LecturerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LecturerTable
     */
    protected $Lecturer;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Lecturer',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Lecturer') ? [] : ['className' => LecturerTable::class];
        $this->Lecturer = $this->getTableLocator()->get('Lecturer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Lecturer);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\LecturerTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
