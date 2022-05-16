<?php
require_once("../models/classes/User.class.php");
require_once("../models/functions/redirect_to.function.php");
// hold the user
$user = new User();
$user->set_email($_POST["email"]);
$user->set_password($_POST["password"]);

// made the login and check if it worked correct
if($user->login()) {
    // start the session and pass the user to it to load the profile page
    echo "logged in sucessfully";
    redirect_to("../views/Student/index.php");   
}
// display error message if not
else {
    echo "logging in went wrong";
}
