<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CityFixture
 */
class CityFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'city';
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
                'state_id' => 1,
                'city_name' => 'Lorem ipsum dolor ',
                'status' => 1,
                'created' => '2023-02-06 12:34:11',
                'modified' => '2023-02-06 12:34:11',
            ],
        ];
        parent::init();
    }
}
