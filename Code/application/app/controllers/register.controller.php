<?php
// get the important data to make the checking query
require_once("../models/classes/User.class.php");
require_once("../models/functions/redirect_to.function.php");
$user = new User();
$user->set_name($_POST["name"]);
$user->set_username($_POST["username"]);
$user->set_email($_POST["email"]);
$user->set_password($_POST["password"]);

if($user->register()) {
    echo "regesterd sucessfully";
    redirect_to("../views/Student/index.html");
}
else {
    echo "username is already teken before";
}
