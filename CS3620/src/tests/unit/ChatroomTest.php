<?php

require __DIR__.'/../../domain/Chatroom.php';

class ChatRoomTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected $chatRoom;

    protected function _before()
    {
        $this->chatRoom = new App\domain\Chatroom();
    }

    protected function _after()
    {
        unset($this->chatRoom);
    }

    // tests
    public function testUserNotNull()
    {

    }
}