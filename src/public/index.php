<?php
/**
 * Created by PhpStorm.
 * User: Blake Freeman
 * Date: 8/9/2017
 * Time: 5:37 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../../vendor/autoload.php';

$app = new \Slim\App;
require __DIR__ . '/../settings.php';
require __DIR__ . '/../dependencies.php';
require __DIR__ . '/../routes.php';

//$app->get('/hello/{name}', function (Request $req, Response $resp) {
//    $name = $req->getAttribute('name');
//    $resp->getBody()->write('Hello, ' . $name);
//
//    return $resp;
//});

$app->run();
