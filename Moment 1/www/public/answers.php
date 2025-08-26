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
            $ans1 = $_POST['qOne'];

            for ($i=0; $i < 2; $i++) { 
                $ans = $_POST['q'. ($i+1)]
                echo "<p>Svar:" . $ans  . "</p>";
            }

        ?>
    </main>
</body>
</html>