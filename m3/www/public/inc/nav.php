<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<h1>Innehåll</h1>

<ul>
    <li><a href="index.php">Hem</a></li>
    <li><a href="index.php?page=blogg">Blogg</a></li>
    <li><a href="index.php?page=bilder">Bilder</a></li>
    <li><a href="index.php?page=kontakt">Kontakt</a></li>
    <li><a href="index.php?page=login"><?php
                                        if (isset($_SESSION["inloggad"])) {
                                            echo "Logga ut";
                                        } else {
                                            echo "Logga in";
                                        }
                                        ?></a></li>
    <?php
    if (isset($_SESSION["inloggad"])) {
        echo ('    <li><a href="index.php?page=klotter">Klotterplanket</a></li>
');
    }
    ?>
</ul>