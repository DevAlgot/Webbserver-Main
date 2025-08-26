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
            $correct = [
                0 => "php",
                1 => "js",
                2 => 
            ];

            for ($i=0; $i < 2; $i++) { 
                $ans = $_POST['q'. ($i+1)];
                
                if($correct[$i] == $ans) {
                    echo "<p>Svar:" . $ans  . " Rätt</p>";
                } else {
                    echo "<p>Svar:" . $ans  . " Fel</p>";
                }
            }

        ?>
    </main>
</body>
</html>