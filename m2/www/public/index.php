<!doctype html>
<html>

<head lang="sv">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="script.js"></script>
   <link rel="stylesheet" href="style.css">
   
</head>

<body>
   <main>
      <?php
         include("inc/math.php");

         echo strip_tags("<p>Hej <i><b>världen!</b></i></p>", "<p><b>");

         $nums = "";
         for ($i=0; $i <= 5; $i+=0.1) { 
            $nums += $i . " ";
         }
         echo "<p>$nums</p>";

         $page["head"] = "<h1>Välkommen</h1>";
         $page["body"] = "<p>Detta är innehållet på min sida</p>";
         $page["footer"] = "<hr><p>Min sidfoot</p>";

         foreach($page as $section) {
            echo $section;
         }

         echo "<p>" . add(5, 3) . "</p>";
         echo "<p>" . subtract(5, 3) . "</p>";
         echo "<p>" . multiply(5, 3) . "</p>";
         echo "<p>" . divide(5, 0) . "</p>";
         echo "<p>" . divide(5, 3) . "</p>";
       ?>
   </main>
</body>

</html>