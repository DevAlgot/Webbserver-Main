<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<h1>
    <?php
    if (isset($_SESSION["inloggad"])) {
        echo ($_SESSION["user"]);
    }
    ?>
</h1>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Nulla tristique elementum nisl, et vehicula neque laoreet ut.
    Praesent sed ultrices purus.
</p>