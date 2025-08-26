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
                1 => "js"
            ];

            $points = 0;

            $i = 0;
            while($i < count($correct)) { 
                $ans = $_POST['q'. ($i+1)];
                
                if($correct[$i] == $ans) {
                    $points++;
                    echo "<p>Svar:" . $ans  . " Rätt</p>";
                } else {
                    echo "<p>Svar:" . $ans  . " Fel</p>";
                }
                $i++;
            }

            echo "<p>Totala poäng: " . $points . "/$i</p>";

        ?>
    </main>
</body>
</html>