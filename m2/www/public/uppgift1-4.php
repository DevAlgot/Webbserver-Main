<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         include("inc/math.php");

         echo strip_tags("<p>Hej <i><b>världen!</b></i></p>", "<p><b>");

         $nums = "";
         for ($i=0; $i <= 5; $i+=0.1) { 
            $nums .= $i . " ";
         }
         echo "<p>$nums</p>";

         $page["head"] = "<h1>Välkommen</h1>";
         $page["body"] = "<p>Detta är innehållet på min sida</p>";
         $page["footer"] = "<hr><p>Min sidfoot</p>";

         foreach($page as $section) {
            echo $section;
         }

         echo "<h1>Uppgift 4 </h1> < br> <p>" . add(5, 3) . "</p>";
         echo "<p>" . subtract(5, 3) . "</p>";
         echo "<p>" . multiply(5, 3) . "</p>";
         echo "<p>" . divide(5, 0) . "</p>";
         echo "<p>" . divide(5, 3) . "</p>";
       ?>
</body>
</html>