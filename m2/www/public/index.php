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
         echo strip_tags("<p>Hej <i><b>världen!</b></i></p>", "<p><b>");
      ?>
   </main>
</body>

</html>