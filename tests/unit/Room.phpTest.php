<?php

require  __DIR__.'/../../src/domain/Room.php';
require __DIR__.'/../../src/config/database.php';
class RoomTest extends \Codeception\Test\Unit
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
    public function testRoomConstructor()
    {
        $room = new Domain\Room();
        $this->assertNotEmpty($room);
    }

    public function testRoomId()
    {
        $room = new Domain\Room();
        $room->RoomId(1);
        $this->assertEquals(1, $room->GetRoomId());
        $this->assertNotEquals(2, $room->GetRoomId());
    }

    public function testUserId()
    {
        $room = new Domain\Room();
        $this->assertClassHasAttribute('userId', 'Domain\Room');
        $room->UserId("someEmail");
        $this->assertEquals("someEmail", $room->GetUserId());
        $this->assertNotEquals(2, $room->GetUserId());
    }

    public function testMessageId()
    {
        $room = new Domain\Room();
        $this->assertClassHasAttribute('messageId', 'Domain\Room');
        $room->MessageId(1);
        $this->assertEquals(1, $room->GetMessageId());
        $this->assertNotEquals(2, $room->GetMessageId());
    }

    public function testActive()
    {
        $room = new Domain\Room();
        $this->assertClassHasAttribute('active', 'Domain\Room');
        $room->Active(1);
        $this->assertEquals(1, $room->GetActive());
        $this->assertNotEquals(0, $room->GetActive());
    }
}