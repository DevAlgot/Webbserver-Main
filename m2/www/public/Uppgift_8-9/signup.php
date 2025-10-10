<?php
include "../secure.php";

$file = "../../inc/person.dat";


$name = checkSet("user");
$pass = checkSet("pass");
$email = checkSet("email");

$name = cleanData($name);
$pass = cleanData($pass);
$email = cleanData($email);

$userarr  = unserialize(file_get_contents($file));
$user = new Person($email, $pass, $name);
$userarr[] = $user;

file_put_contents($file, serialize($userarr));
header("location: ../index.php");
