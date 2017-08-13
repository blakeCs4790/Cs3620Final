<?php

namespace Domain;

class Message
{
    protected $messageId;
    protected $message;
    protected $createdDTM;
    protected $userId;


    function MessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    function getMessageId()
    {
        return $this->messageId;
    }

    function Message($message)
    {
        $this->message = $message;
        return $this;
    }

    function getMessage()
    {
        return $this->message;
    }

   function UserId($userId)
   {
       $this->userId = $userId;
       return $this;
   }

   function getUserId()
   {
       return $this->userId;
   }

    function CreatedDTM($val)
    {
        $this->createdDTM = $val;
        return $this;
    }

    function GetCreatedDTM()
    {
        return $this->createdDTM;
    }

}