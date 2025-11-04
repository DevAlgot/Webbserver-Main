<?php
function cleanData($data, $tags = null)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data, $tags);
    return $data;
}

function checkSet($data)
{
    if (isset($_POST[$data])) return $_POST[$data];
    else return null;
}
