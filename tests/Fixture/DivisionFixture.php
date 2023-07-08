<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DivisionFixture
 */
class DivisionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'division';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'faculty_id' => 1,
                'division_number' => 1,
                'strength' => 1,
                'branch_id' => 1,
                'status' => 1,
                'created' => '2023-02-20 12:35:18',
                'modified' => '2023-02-20 12:35:18',
            ],
        ];
        parent::init();
    }
}
