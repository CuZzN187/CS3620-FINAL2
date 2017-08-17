$app->get('/welcome', function (Request $req, Response $resp)

-this get method starts you off at the Welcome screen where all available chatrooms are listed on the screen
-you can choose any chat room by simply clicking on them

---------------------------------------------------------------------------------------------------------------
$app->get('/signin/The%20Cool%20Room', function (Request $req, Response $resp)

-this get method gets you to the Cool Room sign in screen to sign in before entering the chat

---------------------------------------------------------------------------------------------------------------
$app->get('/signin/The%20Lame%20Room', function (Request $req, Response $resp)

-this get method gets you to the Lame Room sign in screen to sign in before entering the chat

---------------------------------------------------------------------------------------------------------------
$app->get('/signin/The%20Big%20Room', function (Request $req, Response $resp)

-this get method gets you to the Big Room sign in screen to sign in before entering the chat

---------------------------------------------------------------------------------------------------------------
$app->get('/signin/The%20PHP%20Room', function (Request $req, Response $resp)

-this get method gets you to the PHP Room sign in screen to sign in before entering the chat

---------------------------------------------------------------------------------------------------------------
$app->get('/TheCoolRoom', function (Request $req, Response $resp)

-this get method gets you to the Cool Room chatroom
-you type and all messages are displayed along with the one you just typed

---------------------------------------------------------------------------------------------------------------
$app->get('/TheLameRoom', function (Request $req, Response $resp)

-this get method gets you to the Lame Room chatroom
-you type and all messages are displayed along with the one you just typed

---------------------------------------------------------------------------------------------------------------
$app->get('/TheBigRoom', function (Request $req, Response $resp)

-this get method gets you to the Big Room chatroom
-you type and all messages are displayed along with the one you just typed

---------------------------------------------------------------------------------------------------------------
$app->get('/ThePHPRoom', function (Request $req, Response $resp)

-this get method gets you to the PHP Room chatroom
-you type and all messages are displayed along with the one you just typed

---------------------------------------------------------------------------------------------------------------