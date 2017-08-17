<?php
/**
 * Created by PhpStorm.
 * User: CuZz'N
 * Date: 8/15/2017
 * Time: 9:07 PM
 */
function fConnectToDatabase() {
    try {
        $db = new PDO('mysql:host=localhost;port=3306;dbname=chats', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }catch(exception $e){
        echo $e->getMessage();
    }
}