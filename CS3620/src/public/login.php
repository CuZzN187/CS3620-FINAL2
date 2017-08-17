<?php
/**
 * Created by PhpStorm.
 * User: CuZz'N
 * Date: 8/15/2017
 * Time: 11:23 PM
 */
function login($pass)
{
    $url = "'http://localhost/CS3620/src/public/welcome'";
    echo('<!DOCTYPE html><html><head>
	<title>CS3620 FINAL</title></head>
	<body>
	<form action="/CS3620/src/public/'.$pass.'">

  <div class="container">
    <label><b>Alias</b></label>
    <input type="text" placeholder="Enter Alias" name="alias" required>

    <br><label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <br><button type="submit">Login</button>
    <button onclick="document.location.href = ' . $url . '" type="button" class="cancelbtn">Cancel</button>
    <input type="checkbox" checked="checked"> Remember me
    
  </div>
</form></body></html>');
    if(isset($_GET['submit']))
    {
        $alias = htmlentities($_GET['alias']);
        $email = htmlentities($_GET['email']);

        myFunction($alias, $email);
    }
}