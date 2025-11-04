<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


include("support.php");
include("inc/User.php");

$username = checkSet("username");
$pass = checkSet("password");




if (file_exists("../inc/users.dat")) {
    if ($username == "Algot") {
        $_SESSION["inloggad"] = true;
        $_SESSION["user"] = $username;
    }

    $user = new User($username, $pass);
    echo $user->getUsername();
    file_put_contents("../inc/users.dat", serialize($user), FILE_APPEND);


    if (isset($_SESSION["inloggad"])) {
        //header("Location: index.php");
    }

    echo ("Fel användarnamn eller lösenord");
    if (file_exists("../inc/users.dat")) {
        $users = unserialize(file_get_contents("../inc/users.dat"));
    }
}


?>


<hgroup>
    <h1>Välkommen till tillbaka</h1>
    <h2>Vänligen logga in</h2>
</hgroup>

<form action="" method="post">
    <input type="text" name="username">
    <label for="username">Användarnamn</label>
    <br>
    <input type="password" name="password" id="">
    <label for="password">Lösenord</label>
    <button type="submit">Logga in</button>
</form>