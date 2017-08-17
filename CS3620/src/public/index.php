<?php
include "mySQL.php";
include "login.php";
//include "ChatroomUI.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;
require __DIR__ . '/../settings.php';
require __DIR__ . '/../dependencies.php';
require __DIR__ . '/../routes.php';

$app->get('/welcome', function (Request $req, Response $resp) {
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><div><h2>'.'All Chatrooms Available'.'</h2><br></div>
	</body></html>');
    $stmt = fDisplayChats();
});

$app->get('/signin/The%20Cool%20Room', function (Request $req, Response $resp) {
    $url = "'http://localhost/CS3620/src/public/welcome'";
    $pass = "TheCoolRoom";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Cool Room Sign In'.'</h2><br></p>
	</body></html>');
    $stmt = login($pass);
});

$app->get('/signin/The%20Lame%20Room', function (Request $req, Response $resp) {
    $pass = "TheLameRoom";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Lame Room Sign In'.'</h2><br></p>
	</body></html>');
    $stmt = login($pass);
});

$app->get('/signin/The%20Big%20Room', function (Request $req, Response $resp) {
    $pass = "TheBigRoom";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Big Room Sign In'.'</h2><br></p>
	</body></html>');
    $stmt = login($pass);
});

$app->get('/signin/The%20PHP%20Room', function (Request $req, Response $resp) {
    $pass = "ThePHPRoom";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The PHP Room Sign In'.'</h2><br></p>
	</body></html>');
    $stmt = login($pass);
});

$app->get('/TheCoolRoom', function (Request $req, Response $resp) {
    $val1 = "TheCoolRoom";
    $val2 = "user1";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Cool Room'.'</h2><br></p>
	</body></html>');
    $stmt = fDisplayChatRoom($val1, $val2);
});

$app->get('/TheLameRoom', function (Request $req, Response $resp) {
    $val1 = "TheLameRoom";
    $val2 = "user1";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Lame Room'.'</h2><br></p>
	</body></html>');
    $stmt = fDisplayChatRoom($val1, $val2);
});

$app->get('/TheBigRoom', function (Request $req, Response $resp) {
    $val1 = "TheBigRoom";
    $val2 = "user1";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The Big Room'.'</h2><br></p>
	</body></html>');
    $stmt = fDisplayChatRoom($val1, $val2);
});

$app->get('/ThePHPRoom', function (Request $req, Response $resp) {
    $val1 = "ThePHPRoom";
    $val2 = "user1";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body><p><h2>'.'The PHP Room'.'</h2><br></p>
	</body></html>');
    $stmt = fDisplayChatRoom($val1, $val2);
});

$app->run();

