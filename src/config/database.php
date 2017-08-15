<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/12/2017
 * Time: 3:02 PM
 */
return [
    'fetch' =>PDO::FETCH_ASSOC,
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'mysql',
            'database' => 'cs3620',
            'port' => 3306,
            'username' => 'root',
            'password' => ''
        ]
    ],
    'redis' => [
        'cluster' => 'false',
        'default' => [
            'host' => 'localhost',
            'post' => 6379,
            'database' => 0
        ]
    ]
];