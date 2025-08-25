<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
      $dollar = $_POST['amount'];
      $sek = $dollar * 9.7;

      echo "<p>$dollar $  =  $sek kr</p>";
      ?>
</body>
</html>