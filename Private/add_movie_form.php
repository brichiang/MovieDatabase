<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>


<!DOCTYPE html>
<html>
 <head>
   <title>ADD MOVIE</title>
  </head>
  <body>
    <form method="post" action="add_movie.php">
      <h1>ADD MOVIE FORM</h1>
      
      <h4>Movie Title</h4>
      <input type="text" name="title"/>
      
      <h4>Movie Runtime</h4>
      <input type="number" name="runtime"/>
      
      <h4>Movie Release Date</h4>
      <input type="date" name="date"/>
      
      <h4>Movie Description</h4>
      <textarea rows="30" cols="50" name="description"></textarea>
      
      <h4>Movie Rating</h4>
      <select name="rating" placeholder="Movie rating">
        <option value="G">G</option>
        <option value="PG">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
              
      </select> 
      
      <?php
      
      
$servername = "localhost";
$username = "brianchiang";
$password = "Brian";
$dbname = "movies_db";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
     
    //get all the current genres from genres table
    $res2 = mysqli_query($conn,"SELECT * FROM genres");
 
    //if the query found records they we will carry on
    if (mysqli_num_rows($res2) > 0) {

            //loop through to display all the genres
            echo
            "<br> <h4>Movie Genre</h4><br>
            <select name='movie_genre'>";
            //This is where we dynamic generate options
            while($row = mysqli_fetch_assoc($res2)) {
                echo "<option value='{$row['genres_id']}'>{$row['genre_type']}</option>";
            }       
            echo "<select><br>";
      
//           echo "<img style='width:250px; background-size:contain;' src='{$row["movie_image"]}'/>";
//      
//            echo "<br><br>";  
          

    }       
}

mysqli_close($conn);
            
      ?>
      
<!--
      <h4>Movie Cover Image</h4>
      <input type="text" name="image" style="width:300px" placeholder="IMAGE URL"/>
    
-->
      
        <br><br>

      <input type="submit" />
    </form>
  
  </body>
</html>