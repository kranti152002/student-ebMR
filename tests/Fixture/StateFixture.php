<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StateFixture
 */
class StateFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'state';
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
                'state_name' => 'Lorem ipsum dolor ',
                'state_code' => 1,
                'abbreviation' => 'Lo',
                'created' => '2023-02-06 12:32:35',
                'modified' => '2023-02-06 12:32:35',
            ],
        ];
        parent::init();
    }
}
