<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/14/2017
 * Time: 9:46 AM
 */

namespace storage\dbAdapters\Message;

require __DIR__ .'/../../../domain/Message.php';
require __DIR__ .'/../../../domain/Room.php';

interface Sql_MessageInterface
{
  public function ReadMessage($roomId);
  public function AddMessage($roomId, $message, $userId);
}