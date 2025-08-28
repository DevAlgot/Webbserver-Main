<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("inc/secure.php");
        mb_internal_encoding("UTF-8");

        $data["name"] = ($_POST['name']);
        $data["email"] = ($_POST['email']);
        $data["password"] = ($_POST['password']);
        $data["surname"] = ($_POST['surname']);



        foreach($data as $identifier){
            if(isset($identifier)){
                if(!mb_check_encoding($identifier, 'UTF-8')){
                    header("Location: index.html");
                }

                $identifier = secure($identifier);

                echo "<p>$identifier</p>";
            } else {
                header("Location: index.html");
            }
        }

    ?>
</body>
</html>