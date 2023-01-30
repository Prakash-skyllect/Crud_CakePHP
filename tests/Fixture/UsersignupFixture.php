<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersignupFixture
 */
class UsersignupFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usersignup';
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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-01-27',
                'modified' => '2023-01-27',
            ],
        ];
        parent::init();
    }
}
