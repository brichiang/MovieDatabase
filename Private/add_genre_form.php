<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>ADD GENRE</title>
       <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  </head>
  <body>
    
     <?php require_once("../Private/shared/header.php") ?>
    <div class="contentclass">
    
       <form method="post" action="add_genre.php">
      <h1>ADD GENRE FORM</h1>
      
      <input type="text" name="genre"/>
      <br>

      <input type="submit" />
    </form>
    
    
    </div>
        
 
   <?php require_once("../Private/shared/footer.php") ?>
  </body>
  
</html>