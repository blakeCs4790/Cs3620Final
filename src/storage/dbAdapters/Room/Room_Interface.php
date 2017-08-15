<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/14/2017
 * Time: 9:47 AM
 */

namespace storage\dbAdapters\Room;


interface Room_Interface
{
   public function AddRoom($userId, $messageId);
   public function ReadAllRooms();
   public function ReadAllMessages($roomId);
}