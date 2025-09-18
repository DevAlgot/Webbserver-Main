<?php
function cleanData($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkSet($data)
{
    if (isset($_POST[$data])) return $_POST[$data];
    else header("Location: index.php");
}
