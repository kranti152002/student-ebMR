<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CollegeFixture
 */
class CollegeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'college';
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
                'college_name' => 'Lorem ipsum dolor ',
                'principal_name' => 'Lorem ipsum dolor ',
                'phone_number' => 1,
                'address' => 'Lorem ipsum dolor sit amet',
                'city_id' => 1,
                'state_id' => 1,
                'postalcode' => 1,
                'website' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2023-02-06 12:34:32',
                'modified' => '2023-02-06 12:34:32',
            ],
        ];
        parent::init();
    }
}
