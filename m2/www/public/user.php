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

        $data["name"] = $_POST['name'];



        if(isset($_POST['name'])){
            $name = $_POST['name'];

            if(!mb_check_encoding($_POST['name'], 'UTF-8')){
                header("Location: index.html");
            }

            $name = secure($name);
            echo "<p>Hej $name</p>";

        } else{
            header("Location: index.html");
        }
    ?>
</body>
</html>