<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include("support.php");
include("inc/User.php");

$file = "../inc/users.dat";

$username = checkSet("username");
$pass = checkSet("password");




if (file_exists($file)) {
    $users = unserialize(file_get_contents($file));

    for ($i = 0; $i < count($users); $i++) {
        if ($username == $users[$i]->getUsername() && $pass == $users[$i]->getPassword()) {
            $_SESSION["inloggad"] = true;
            $_SESSION["user"] = $username;
        }
    }

    if ($username == "Algot") {
    }

    if (isset($_SESSION["inloggad"])) {
        header("Location: index.php");
    }
}


?>


<hgroup>
    <h1>Välkommen tillbaka</h1>
    <h2>Vänligen logga in</h2>
</hgroup>

<form action="" method="post">
    <input type="text" name="username">
    <label for="username">Användarnamn</label>
    <br>
    <input type="password" name="password" id="">
    <label for="password">Lösenord</label>
    <br>
    <button type="submit">Logga in</button>
</form>
<br>
<hr><br>
<form action="/inc/signup.php" method="post">
    <input type="text" name="name">
    <label for="username">Användarnamn</label>
    <br>
    <input type="password" name="password" id="">
    <label for="password">Lösenord</label>
    <br>
    <button type="submit">Skapa Konto</button>
</form>