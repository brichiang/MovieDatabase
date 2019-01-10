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
    <link href="stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  </head>
  
  <body>
    <?php require_once("../Private/shared/header.php") ?>
    
    <div id="content" class="contentclass">
      <div id = "homeBox">
        <div id="meme"></div>
        <p> This movie database website is made by Eveyen and Brian</p>
      </div>
     
     
       <?php require_once("../Private/shared/footer.php") ?>
    </div>  
    
     
   
  </body>
</html>