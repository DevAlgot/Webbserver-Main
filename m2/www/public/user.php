<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("secure.php");
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