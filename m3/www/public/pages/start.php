<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<hgroup>
    <h1>Välkommen <?php
                    if (isset($_SESSION["inloggad"])) {
                        echo $_SESSION["user"];
                    } else {
                        echo "anonym";
                    }

                    ?>, till Webbserverprogrammering 1</h1>
    <h2>Moment 3</h2>
</hgroup>

<p>Min sida</p>