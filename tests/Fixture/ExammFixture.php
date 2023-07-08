<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExammFixture
 */
class ExammFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'examm';
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
                'student_id' => 1,
                'subject_id' => 1,
                'marks' => 1,
            ],
        ];
        parent::init();
    }
}
