<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/14/2017
 * Time: 2:32 PM
 */

namespace storage\dbAdapters\User;

use Domain\User;

require_once __DIR__.'/UserInterface.php';
require __DIR__ .'/../../../domain/User.php';

class RedisAdapter implements UserInterface
{

    protected $redis;
    public function __construct(\Redis $redis)
    {
        $this->redis = $redis;
    }
    public function read($id)
    {
        $something = json_decode($this->redis->get($id), true);
        $user = new User();
        $user->UserName($something[0]['userName'])->Username($something[0]['username'])
            ->UserEmail($something[0]['userId'])->setUserID($something[0]['userId']);
        return $user;
    }
    public function write(user $user)
    {
        $this->redis->set($user->UserName(), $user->UserName());
    }
    public function remove($id)
    {
        $this->redis->delete($id);
        return true;
    }
}
