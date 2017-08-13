<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 7/31/2017
 * Time: 8:24 PM
 */

namespace Domain;


class Room
{
    protected $room;
    protected $roomId;
    protected $userId;
    protected $messageId;
    protected $lastUsed;
    protected $active;

    function Room($room)
    {
        $this->room = $room;
        return $this;
    }

    function RoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    function GetRoomId()
    {
        return $this->roomId;
    }


    function UserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    function GetUserId()
    {
        return $this->userId;
    }

    function MessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    function GetMessageId()
    {
        return $this->messageId;
    }

    function LastUsed($lastUsed)
    {
        $this->lastUsed = $lastUsed;
        return $this;
    }

    function Active($active)
    {
        $this->active = $active;
        return $this;
    }

    function GetActive()
    {
        return $this->active;
    }
}