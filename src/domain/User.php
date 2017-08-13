<?php

namespace Domain;

class User
{

    protected $userName;
    protected $userEmail;

    public function  __construct(){}

    public function UserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    function GetUserName()
    {
        return $this->userName;
    }

    public function UserEmail($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    function GetUserEmail()
    {
        return $this->userId;
    }
}

echo getcwd();