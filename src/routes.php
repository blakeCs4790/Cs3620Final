<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/9/2017
 * Time: 5:41 PM
 */

/*
 * POST /Room/{userId}
 * POST /User/{userName}/{userId}
 * POST /Message/{userId}/{roomId}/{message_to_add}
 * GET /Messages
 * GET /Rooms
 */

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app->post('/Room/{userId}/{messageId}', function(Request $req, Response $resp, $args){
    return $resp->withStatus(200);
});

$app->post('/user/create', function(Request $req, Response $resp) {
   $user = $this->newUser;
   $body = $req->getParsedBody();
   $user->UserName($body['userName']);
   $user->UserEmail($body['userEmail']);
   $this->RedisAdapter->write($user);
   $resp = $resp->withHeader('allowed', 'User Created');
   $resp = $resp->withoutHeader(('Content-Type'));
   $resp = $resp->withJson($user->arr());
   return $resp;
});
