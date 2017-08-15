<?php

require  __DIR__.'/../../src/domain/User.php';
class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testUserName()
    {
        $user = new Domain\User();
        $this->assertClassHasAttribute('userName', 'Domain\User');
        $user->UserName("someName");
        $this->assertNotEmpty($user);
        $this->assertEquals("someName", $user->GetUserName());
        $this->assertNotEquals(1, $user->GetUserName());
    }

    public function testUserId()
    {
        $user = new Domain\User();
        $this->assertClassHasAttribute('userEmail', 'Domain\User');
        $user->UserEmail("thisIsSomeEmail");
        $this->assertEquals("thisIsSomeEmail", $user->GetUserEmail());
        $this->assertNotEquals(1, $user->GetUserEmail());

    }
}