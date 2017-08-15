<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/14/2017
 * Time: 10:47 AM
 */

namespace storage\dbAdapters\Message;

//require __DIR__ .'/../../../domain/Message.php';
require_once __DIR__ .'/Sql_MessageInterface.php';

class MessageAdapter implements Sql_MessageInterface
{
    protected $mysql;

    public function __construct(\PDO $mysql)
    {
        $this->mysql = $mysql;
    }

    public function ReadMessage($roomId)
    {
            $st = $this->mysql->prepare("SELECT Message FROM Message INNER JOIN room on MessageId = room.MessageId WHERE MessageId = $roomId");
            $st->execute();
            $data = $st->fetchAll();
            return $data;
                //json_encode($data);
    }

    public function AddMessage($message, $uId, $roomId)
    {
            $st = $this->mysql->prepare("INSERT INTO Message (Message, UserId, CreatedDTM, RoomId) VALUES ('$message', '$uId', '$roomId'");
            $st->bindParam(":message", $message);
            $st->bindParam(":userId", $uId);
            $st->execute();
            $data = $st->fetchAll();
            return $data;
                //json_encode($data);

    }
}