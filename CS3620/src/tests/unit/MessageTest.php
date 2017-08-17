<?php

require __DIR__.'/../../domain/Message.php';

class MessageTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $message;
    protected $user;

    protected function _before()
    {
        $this->user = new \App\domain\User();
        $this->user->SetAlias("CuZzN");
        $this->user->SetEmail("BOOMBOOMROOM@MSN.COM");
    }

    protected function _after()
    {
        unset($user);
        unset($message);
    }

    // tests
    public function testMessageNotNull()
    {
        // Arrange
        $u = $this->user;

        // Act
        $this->message = new \App\domain\Message($u, "Message here..");

        // Assert
        $this->assertTrue($this->message != null, 'Message was null');
    }

    public function testMessageMessageInfo()
    {
        // Arrange
        $u = $this->user;
        $m = "";

        // Act
        $this->message = new \App\domain\Message($u, $m);

        // Assert
        $this->assertEquals($this->message->GetMessage(), $m, "Required message info not found");
    }

    /**
     *
     */
    public function testMessageSender()
    {
        // Arrange
        $u = $this->user;
        $m = "";

        // Act
        $this->message = new \App\domain\Message($u, $m);
        $uG = $this->message->GetSender();

        // Assert
        $this->assertEquals($this->message->GetMessage(), $m, "Required message info not found");
        //$this->assertEquals(null, $uG->GetAlias());
        //$this->assertEquals($uG->GetEmail(), "");
    }

    /**
     *
     */
    public function testMessageDateTime()
    {
        // Arrange
        $u = $this->user;
        $dt = date("h:i m/d/Y");

        // Act
        $this->message = new \App\domain\Message($u, "Message here..");

        // Assert
        //$this->assertEquals($this->message->GetTimeDate(), $dt, "Required Date Time not found");
    }
}