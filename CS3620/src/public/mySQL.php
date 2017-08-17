<?php
/**
 * Created by PhpStorm.
 * User: CuZz'N
 * Date: 8/15/2017
 * Time: 9:02 PM
 */
include "dbConnect.php";

function fDisplayChats()
{
    try {
        $myDB = fConnectToDatabase();
        $stmt = $myDB->prepare("SELECT chatroomName FROM chatroom");
        $stmt->execute();
        while($row = $stmt->fetch()){
            $url = ("'http://localhost/CS3620/src/public/signin/".$row[0]."'");
            echo('<!DOCTYPE html><html><head><title>title</title></head><body><td><button onclick="document.location.href = '.$url.'" type="button">'.$row[0].'&#8658;</button></td><br></body></html>');
            echo "<br>";
        }
        return $stmt;
    }
    catch(exception $e){
        echo $e->getMessage();
    }
}

/**
 * @param $val1
 * @param $val2
 */
function fDisplayChatRoom($val1, $val2)
{
    $count = 0;
    $message = trim('');
    echo('<!DOCTYPE html>
            <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html: charsetwindows-1255">
            <title>
                ChatRoom
            </title>
            <link rel="stylesheet" type="text/css" href="style.css">
            </head>
            <body>
            <form action="/CS3620/src/public/'.$val1.'">
            <div class="chatbox">');
            echo('<div class="chat-form">
            <label><b>Message</b></label>
            <input type="text" placeholder="Enter Message" name="alias" required>
            <br><button type="submit">SEND</button>
            </div>
            </form>
            </body>
            </html>');

    if($count == 0)
    {
        try {
            $message = htmlentities($_GET['alias']);
            addMessage($val2, $message, $val1);
        }
        catch(exception $e){
            echo $e->getMessage();
        }
    }
    else{
        echo'failed';
    }
}

function addMessage($val1, $val2, $val3)
{
    try {
        $myDB = fConnectToDatabase();
        $stmt = $myDB->prepare("INSERT INTO ".$val3." (Sender, Message) VALUES ('$val1', '$val2')");
        $stmt->execute();
        $sql = "SELECT Sender, Message FROM ".$val3." ORDER BY idMsg";
        foreach ($myDB->query($sql) as $row){
            echo('<link rel="stylesheet" type="text/css" href="style.css"><div class="chatlog"><div class="chat self">
            <div class="user-photo"><img src="leo.png" alt="smiles"></div>
            <p class="chat-message">'. $row[0] . ': ' .$row[1]. '</p></div></div>');
            echo('<br>');
        }
    }
    catch(exception $e){
    }
}


