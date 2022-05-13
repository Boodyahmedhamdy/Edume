<?php

require_once("../models/classes/SQLRunner.class.php");
require_once("../models/classes/User.class.php");


if(isset(($_POST["email"])) && (isset($_POST["password"]))) {
    $user = new User();
    $user->set_email($_POST["email"]);
    $user->set_password($_POST["password"]);

    $all_users = SQLRunner::run_query("select * from users");


}

    

$user = new User();
$user->set_email($_POST["email"]);
$user->set_password($_POST["password"]);

$sql = "select * from users where email = ". $user->get_email() ." and password = " .$user->get_password();

$res = SQLRunner::run_query("select * from users");

print_r($res);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edume - Home</title>
</head>
<body>

    <form action="" method="post">

        <input type="text" name="email" placeholder="enter your email">

        <input type="text" name="password" placeholder="enter you password">

        <input type="submit" value="login">

    </form>
    
</body>
</html>
