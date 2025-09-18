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
      <form action="uppgift1-4.php" method="post">
         <input type="submit" value="Uppgifter 1 - 4">
      </form>

      <h2>Uppgift 5/6</h2>
      <form action="user.php" method="post">
         <label for="name">Namn:</label>
         <input type="text" name="name">

         <label for="surname">Efternamn: </label>
         <input type="text" name="surname">

         <label for="email">E-post:</label>
         <input type="email" name="email">

         <label for="password">Lösenord</label>
         <input type="password" name="password">

         <input type="submit" value="Skicka">


      </form>

      <h2>Uppgift 8-9</h2>
      <form action="checkUser.php" method="post">
         <label for="user">Username</label>
         <input name="user" type="text">

         <label for="pass">Password</label>
         <input type="password" name="pass" id="">

         <input type="submit" value="Log in">
      </form>
      <form action="signup.php" method="post">
         <label for="user">Username</label>
         <input name="user" type="text">

         <label for="pass">Password</label>
         <input type="password" name="pass" id="">

         <label for="email">Email</label>
         <input type="email" name="email" id="">

         <input type="submit" value="Sign Up">
      </form>
   </main>
</body>

</html>