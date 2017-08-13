<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/11/2017
 * Time: 7:54 PM
 */

namespace Storage;

require __DIR__ .'/../../dependencies.php';

class MySqlRoomPlugin implements StorageInterface
{
    public function Create($values)
    {
        $myDb = ConnectToMySQL();
        $userId = $values->userId;
        $messageId = $values->messageId;
        $sql = $myDb->prepare("INSERT INTO Room (UserId, MessageId, Active) VALUES ('$userId', '$messageId', 1");
        $sql->bindParam(":message", $messageId);
        $sql->bindParam(":userId", $userId);
        $sql->execute();
    }
    public function Read()
    {

    }
    public function ReadId($id)
    {
        $myDb = ConnectToMySQL();
        $sql = $myDb->prepare("SELECT * FROM Room INNER JOIN Message on RoomId = Message.MessageId WHERE Room.MessageId = $id");
        $sql->execute();
        $arr = pg_fetch_all($sql);
        return json_encode($arr);
    }
    public function Remove($id)
    {

    }
    public function Update($id, $values)
    {
        $myDb = ConnectToMySQL();
        $userId = $values->UserId;
        $messageId = $values->MessageId;
        $sql = $myDb->prepare("UPDATE Room SET MessageId = $messageId, UserId = $userId WHERE MessageId = $id");
        $sql->bindParam(":userId", $userId);
        $sql->bindParam(":messageId", $messageId);
        $sql->execute();
    }
}