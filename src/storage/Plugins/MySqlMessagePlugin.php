<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/10/2017
 * Time: 9:01 PM
 */
namespace Storage;


require __DIR__ . '/../../dependencies.php';

Class MySqlMessagePlugin implements StorageInterface
{
    protected $mySql;

    public function __construct(\PDO $pdo)
    {
        $this->mySql = $pdo;
    }

    public function Create($values)
    {

        $message = $values->message;
        $userId = $values->userId;
        $st = $this->mySql->prepare("INSERT INTO Message (Message, UserId, CreatedDTM) VALUES ('$message', '$userId'");
        $st->bindParam(":message", $message);
        $st->bindParam(":userId", $userId);
        $st->execute();
    }
    public function Read()
    {


    }
    public function ReadId($id)
    {


        $sql = $myDb->prepare("SELECT Message FROM Message INNER JOIN room on MessageId = room.MessageId WHERE MessageId = $id");
        $sql->execute();
        $arr = pg_fetch_all($sql);
        return json_encode($arr);
    }
    public function Remove($id)
    {
        $myDb = ConnectToMySQL();
        $sql = $myDb->prepare("DELETE FROM Message WHERE MessageId = $id");
        $sql->execute();
    }
    public function Update($id, $values)
    {
        $myDb = ConnectToMySQL();
        $message = $values->Message;
        $userId = $values->UserId;
        $sql = $myDb->prepare("UPDATE Message SET Message = $message, UserId = $userId WHERE MessageId = $id");
        $sql->execute();
    }
}