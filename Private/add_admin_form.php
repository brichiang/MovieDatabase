<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>


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
        
        <h1>Sign Up</h1>
        <div class='contentclass'>
        <form method="post" action="add_admin.php">
            First Name<br>
            <input type="text" name="firstname" required>
            <br>
            
            Last Name<br>
            <input type="text" name="lastname" required>
            <br>
            
            Email<br>
            <input type="text" name="email" required>
            <br>
            
            Username<br>
            <input type="text" name="username" required>
            <br>
          
            Password<br>
            <input type="text" name="password" required>
            <br>
            
            <button type="submit">Add Admin</button>
        </form>
        </div>
<br>
<!--        <a href="admin.php">Back to Admin</a>-->
       <?php require_once("../Private/shared/footer.php") ?>
    </body>
</html>