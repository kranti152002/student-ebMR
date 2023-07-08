<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SemesterFixture
 */
class SemesterFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'semester';
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
                'branch_id' => 1,
                'sem_number' => 1,
                'fees' => 1,
                'created' => '2023-02-06 12:32:57',
                'modified' => '2023-02-06 12:32:57',
            ],
        ];
        parent::init();
    }
}
