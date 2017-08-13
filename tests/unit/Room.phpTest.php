<?php

require  __DIR__.'/../../src/domain/Room.php';
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

    public function RoomId()
    {
        $room = new Domain\Room();
        $room->RoomId(1);
        $this->assertEquals(1, $room->GetRoomId());
        $this->assertNotEqual(2, $room->GetRoomId());
    }
}