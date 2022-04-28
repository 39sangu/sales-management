<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GradesFixture
 */
class GradesFixture extends TestFixture
{
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
                'students_id' => 1,
                'score' => 1,
                'created' => '2022-04-26 06:52:57',
                'modified' => '2022-04-26 06:52:57',
            ],
        ];
        parent::init();
    }
}
