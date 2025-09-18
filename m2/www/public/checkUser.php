<?php
include("../inc/users.php");
include("secure.php");

$file = "../inc/person.dat";
$users = unserialize(file_get_contents($file));
echo $users[0]->getUsername();

$user = checkSet("user");
$pass = checkSet("pass");

$user = cleanData($user);
$pass = cleanData($pass);

for ($i = 0; $i < count($users); $i++) {
    if ($user == $users[$i]->getUsername() && $pass == $users[$i]->getPassword()) {
        header("location: userPage.php?name=" . $users[$i]->getUsername());
        exit;
    }
}

header("location: index.php");
