<?php

// require_once("../models/classes/SQLRunner.class.php");
require_once("../models/classes/User.class.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $the_email = $_POST["email"];
    $the_password = $_POST["password"];
    
    if(isset($the_email) && (isset($the_password))) {
        if(!(empty($the_email) && !(empty($the_password)))) {
            $user = new User();
            $user->set_email($the_email);
            $user->set_password($the_password);
    
            if($user->login()) {
                echo "logged in successfully";
            }
            else {
                echo "wrong email or password";
            }
        }
    }
}





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
