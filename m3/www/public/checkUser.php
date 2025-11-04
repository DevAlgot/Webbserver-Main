<?php
session_start();


include("inc/support.php");

$username = checkSet("username");
$pass = checkSet("password");

echo $username . " " . $pass;



if (file_exists("../inc/users.dat")) {
    $_SESSION["inloggad"] = true;
    $_SESSION["user"] = $username;
    $users = file_get_contents(("../inc/users.dat"));
    echo $users;


    echo "file exists";
}

if (isset($_SESSION["inloggad"])) {
    header("Location: index.php");
}
