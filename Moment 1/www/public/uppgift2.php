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
            $name = $_POST['name'];
            $age = $_POST['age'];

            $yearsToPension = 65 - $age;

            echo "<p>Namn: $name har $yearsToPension år kvar till pension.</p>";
        ?>
    </main>
</body>
</html>