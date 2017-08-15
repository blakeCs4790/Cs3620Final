<?php

require  __DIR__.'/../../src/domain/Message.php';
class MessageTest extends \Codeception\Test\Unit
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
    public function testMessageConstructor()
    {
        $message = new Domain\Message();
        $this->assertNotEmpty($message);
    }

    public function testMessageId()
    {
        $message = new Domain\Message();
        $this->assertClassHasAttribute('messageId', 'Domain\Message');
        $message->MessageId(1);
        $this->assertEquals(1,$message->getMessageId());
        $message->MessageId(null);
        $this->assertEquals(null, $message->getMessage());
    }

    public function testMessage()
    {
        $message = new Domain\Message();
        $this->assertClassHasAttribute('message', 'Domain\Message');
        $message->Message("this sucks");
        $this->assertEquals("this sucks", $message->getMessage());
        $this->assertNotEquals("this does not suck", $message->getMessage());
    }

    public function testUserId()
    {
        $message = new Domain\Message();
        $message->UserId("looser@email.com");
        $this->assertEquals("looser@email.com", $message->getUserId());
        $this->assertNotEquals("notALooser@email.com", $message->getUserId());
    }
}
