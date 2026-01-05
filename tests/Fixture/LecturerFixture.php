<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LecturerFixture
 */
class LecturerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'lecturer';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'lecturer_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'faculty' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
