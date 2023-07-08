<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubjectFixture
 */
class SubjectFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'subject';
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
                'semester_id' => 1,
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-02-06 12:33:51',
                'modified' => '2023-02-06 12:33:51',
            ],
        ];
        parent::init();
    }
}
