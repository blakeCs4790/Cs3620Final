<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/14/2017
 * Time: 12:16 PM
 */

namespace storage\dbAdapters\Room;

require_once __DIR__ .'/Room_Interface.php';

class RoomAdapter implements Room_Interface
{
    protected $mysql;

    public function __construct(\PDO $mysql)
    {
        $this->mysql = $mysql;
    }

    public function AddRoom($userId, $active)
    {
        $st = $this->mysql->prepare("INSERT INTO room (UserId, Active) VALUES ('$userId')");
        $st->bindParam(":UserId", $userId);
        $st->bindParam(":Active", $active);
        $st->execute();
        $data = $st->fetchAll();
        return json_encode($data);
    }
    public function ReadAllRooms()
    {
        $st = $this->mysql->prepare("Select RoomId From room");
        $st->execute();
        $data = $st->fetchAll();
        return \GuzzleHttp\json_decode($data);
    }
    public function ReadAllMessages($roomId)
    {
        $st = $this->mysql->prepare("SELECT * FROM message WHERE message.RoomId = $roomId");
        $st->execute();
        $data = $st->fetchAll();
        return json_encode($data);
    }
}