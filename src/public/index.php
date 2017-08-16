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
use \storage\dbAdapters as Storage;
use \domain\User;
use \domain\Room;
use \domain\Message;

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../settings.php';
$app = new \Slim\App($settings);
require __DIR__ . '/../settings.php';
require __DIR__ . '/../dependencies.php';
require __DIR__ . '/../routes.php';

$app->run();
