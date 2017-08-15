<?php

require __DIR__ .'/domain/User.php';
require __DIR__ .'/domain/Message.php';
require __DIR__ .'/domain/Room.php';
require __DIR__ .'/storage/dbAdapters/Message/MessageAdapter.php';
require __DIR__ .'/storage/dbAdapters/Room/RoomAdapter.php';
require __DIR__ .'/storage/dbAdapters/User/RedisAdapter.php';

// database functions ************************************************
$dc = $app->getContainer();
$settings = $dc->get('settings', 'database');

$dc['mysql'] = function ($dc) use ($settings) {
    $d = $settings[0]['connections']['mysql'];
    $pdo = new PDO(
        $d['driver'].':host=' .$d['host'].';dbname='.$d['database'].'port='.$d['port'],
        $d['username'],
        $d['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$dc['redis'] = function ($dc) use ($settings) {
    $d = $settings[0]['connections']['redis'];
    $redis = new Redis();
    $redis->connect($d['default']['host'], $d['default']['port']);
    return $redis;
};

$dc['newUser'] = function($dc) {
    $user = new \Domain\User();
    return $user;
};

$dc['newMessage'] = function($dc) {
    $message = new \Domain\Message();
    return $message;
};

$dc['newRoom'] = function($dc) {
    $room = new \Domain\Room();
    return $room;
};

$dc['UserAdapter'] = function($dc) {
    $mysql = new \Storage\dbAdapters\User\RedisAdapter.php($dc->mysql);
    return $mysql;
};

$dc['MessageAdapter'] = function($dc) {
    $mysql = new \Storage\dbAdapters\Message\MessageAdapter.php($dc->mysql);
    return $mysql;
};

$dc['RoomAdapter'] = function($dc) {
    $mysql = new \Storage\dbAdapters\Room\RoomAdapter.php($dc->mysql);
    return $mysql;
};