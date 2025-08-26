<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            $name = $_GET['name'];
            $age = $_GET['age'];

            echo "<p>Namn: $name</p>";
            echo "<p>Ålder: $age</p>";

        ?>

    </main>
</body>
</html>