<?php

$usename = $_POST["username"];
$pass = $_POST["password"];
echo $usename . " " . $pass;



if (file_exists("../inc/users.dat")) {
    $users = file_get_contents(("../inc/users.dat"));


    echo "file exists";
}
