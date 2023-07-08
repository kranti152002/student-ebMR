<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DomainFixture
 */
class DomainFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'domain';
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
                'college_id' => 1,
                'Domain_name' => 'Lorem ipsum dolor ',
                'Duration' => 1,
                'status' => 1,
                'created' => '2023-02-06 12:31:17',
                'modified' => '2023-02-06 12:31:17',
            ],
        ];
        parent::init();
    }
}
