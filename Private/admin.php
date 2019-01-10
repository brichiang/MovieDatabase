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
      
      
       <h1>Admin Area</h1>
      
      <div class="contentclass">
        <div id="flexBox">
        
        
        <div class="flexRow">
          <h4>Actors</h4>
        
          <a href="show_actors.php">Show Actors</a> 
          <br>
        
          <a href="add_actor_form.php">Add Actor</a> 
      
        </div>
        
        <div class="flexRow">
          <h4>Movies</h4>
    
          <a href="show_movie.php">Show Movies</a> 
          <br>
        
          <a href="add_movie_form.php">Add Movies</a> 
        </div>
          
          
      <div class="flexRow">
        <h4>Admin</h4>
    
        <a href="show_admin.php">Show Admin</a> 
        <br>
        
        <a href="add_admin_form.php">Add Admin</a> 
      </div>
          
      <div class="flexRow">
      <h4>Genre</h4>
    
        <a href="show_genre.php">Show Genre</a> 
        <br>
        
        <a href="add_genre_form.php">Add Genre</a> 
      </div>
      
      
      </div>
       
      
    </div>
        
       <?php require_once("../Private/shared/footer.php") ?>
   </body>
</html>