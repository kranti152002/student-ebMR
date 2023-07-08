<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentFixture
 */
class StudentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'student';
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
                'division_id' => 1,
                'branch_id' => 1,
                'semester_id' => 1,
                'student_name' => 'Lorem ipsum dolor sit amet',
                'student_address' => 'Lorem ipsum dolor sit amet',
                'city_id' => 1,
                'state_id' => 1,
                'postalcode' => 1,
                'phone_number' => 1,
                'email' => 'Lorem ipsum dolor ',
                'gender' => 'L',
                'status' => 1,
                'created' => '2023-02-06 12:33:35',
                'modified' => '2023-02-06 12:33:35',
            ],
        ];
        parent::init();
    }
}
