<?php
include("Person.php");


$per1 = new Person("algot.gronvall@hotmail.com ", "123", "Algot");
$userarr[] = $per1;

$per2 = new Person("example@mail.com", "321", "John");
$userarr[] = $per2;

$per3 = new Person("mrsir@mc.se", "2468", "Doe");
$userarr[] = $per3;

$file = "../inc/person.dat";
//file_put_contents($file, serialize($userarr));
