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
   <?php include("header.html");?>
   <main>
      <h1>Matematik-test</h1>
      <form action="evaluate.php" method="post">
         <fieldset id="questions">
            <legend>Frågor</legend>
            <div class="question">
               <label>Namn: </label>
               <input type="text" name="name">
            </div>

         </fieldset>
      </form>
   </main>
   <?php include("footer.html");?>
</body>

</html>