<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BranchFixture
 */
class BranchFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'branch';
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
                'Domain_id' => 1,
                'Branch_name' => 'Lorem ip',
                'status' => 1,
                'created' => '2023-02-06 12:31:34',
                'modified' => '2023-02-06 12:31:34',
            ],
        ];
        parent::init();
    }
}
