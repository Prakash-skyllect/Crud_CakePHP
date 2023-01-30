<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersignupTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersignupTable Test Case
 */
class UsersignupTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersignupTable
     */
    protected $Usersignup;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Usersignup',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usersignup') ? [] : ['className' => UsersignupTable::class];
        $this->Usersignup = $this->getTableLocator()->get('Usersignup', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Usersignup);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsersignupTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
