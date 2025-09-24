<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("secure.php");
    ?>
</head>

<body>
    <h2>Uppgift 5/6</h2>
    <form method="post">

        <label for="name">Namn:</label>
        <input type="text" name="name">

        <label for="surname">Efternamn: </label>
        <input type="text" name="surname">

        <label for="email">E-post:</label>
        <input type="email" name="email">

        <label for="password">Lösenord</label>
        <input type="password" name="password">

        <input type="submit" value="Skicka">


    </form>

    <?php
    mb_internal_encoding("UTF-8");

    $data["name"] = checkSet("name");
    $data["email"] = checkSet('email');
    $data["surname"] = checkSet('surname');
    $data["password"] = checkSet('password');

    foreach ($data as $identifier) {
        if (!mb_check_encoding($identifier, 'UTF-8')) {
            header("Location: index.html");
        }

        $identifier = cleanData($identifier);
        echo "<p>$identifier</p>";
    }

    ?>
</body>

</html>