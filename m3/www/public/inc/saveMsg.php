<?php
include("../support.php");
$allowedTags = ["<b>", "<i>", "<u>"];

$name = '<p>Från: ' . checkSet("name") . '</p>';
$message = "<p>" . checkSet("message") . "</p>";

file_put_contents('../msg.dat', $name . $message, FILE_APPEND);

header("Location: ../index.php?page=klotter");
