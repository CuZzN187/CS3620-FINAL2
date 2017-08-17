<?php

require __DIR__.'/../../domain/User.php';
class UserTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $user;
    protected function _before()
    {
        $this->user = new App\domain\User();
    }

    protected function _after()
    {
        unset($this->user);
    }

    // tests
    public function testUserNotNull()
    {
        // Arrange, Act
        $U = $this->user;

        // Assert
        $this->assertTrue($U != null, "user is null");
    }
}