<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacultyFixture
 */
class FacultyFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'faculty';
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
                'subject_id' => 1,
                'faculty_name' => 'Lorem ipsum dolor ',
                'faculty_address' => 'Lorem ipsum dolor sit amet',
                'city_id' => 1,
                'state_id' => 1,
                'postalcode' => 1,
                'semester_id' => 1,
                'phone_number' => 1,
                'experience' => 1,
                'gender' => 'L',
                'qualification' => 'Lorem ipsum dolor ',
                'salary' => 1,
                'status' => 1,
                'created' => '2023-02-06 12:33:14',
                'modified' => '2023-02-06 12:33:14',
            ],
        ];
        parent::init();
    }
}
