<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<h2>Bilder</h2>
<?php
if (isset($_SESSION["inloggad"])) {
    echo '<img width="140px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fart.ngfiles.com%2Fimages%2F3242000%2F3242200_lazypunkng_shadow-wizard-money-gang.png%3Ff1685757687&f=1&nofb=1&ipt=c53a5b94af07e29a1ae0dca991efbdd4b26ccf62ad4f9c109e33f21f8d3b5f43" alt="">';
    echo "<br> Du är inloggad";
} else {
    echo '<img width=140px src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwunderkiddy.com%2Fmedia%2Fitem-files%2Fstick-figure-1893-jqup-x-2048.jpg&f=1&nofb=1&ipt=2763e80195c927c33d8b5bc9291e6f33086b252367cf670e355fbb65bdb6471d">';
}
?>