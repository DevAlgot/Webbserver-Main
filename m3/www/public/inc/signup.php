<?php

include("../support.php");
include("User.php");

$file = "../../inc/users.dat";

$name = checkSet("name");
$pass = checkSet("password");

$user = new User($name, $pass);
$userarr = unserialize(file_get_contents($file));
$userarr[] = $user;
file_put_contents($file, serialize($userarr));

header("Location: ../index.php?page=login");
