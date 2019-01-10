<!DOCTYPE html>
<html lang="en">
    <head> 
    <meta charset="utf-8">
    <title>Home</title>
    <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  
    </head>
    <body>
        <?php require_once("../Private/shared/header.php") ?>
        
        <h1>Login</h1>
        <div class='contentclass'>
        <form method="POST" action="./login.php">
            Username<br>
            <input type="text" name="username" required>
            <br>
          
            Password<br>
            <input type="text" name="password" required>
            <br>
            
            <button type="submit">Login</button>
        </form>
      </div>
       <?php require_once("../Private/shared/footer.php") ?>
    </body>
</html>