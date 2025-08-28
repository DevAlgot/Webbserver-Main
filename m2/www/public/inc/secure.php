<?php
    function secure($data) {
        $data = strip_tags($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>