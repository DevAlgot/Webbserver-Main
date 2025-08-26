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
            $n1 = $_GET['num1'];
            $n2 = $_GET['num2'];
            $sum = $n1 + $n2;

            echo "<p>$n1 + $n2 = {$sum}kr</p>";
        ?>
    </main>
</body>
</html>