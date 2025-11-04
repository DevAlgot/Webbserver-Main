<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<h2>Kontakt</h2>

<p>
    <?php
    if (isset($_SESSION["inloggad"])) {
        echo "070 123 45 67";
    } else {
        echo "070-xxx xx xx
        <br>
            vändligen logga in för att se

        ";
    }
    ?>
    <br>
</p>