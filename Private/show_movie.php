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
        
    $res2 = mysqli_query($conn,"SELECT * FROM movies");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        //we will generate some dymaic sql
        while($row = mysqli_fetch_assoc($res2)) {
            
            
            
            echo "
              <div class='contentclass1'>
                <div id='movieBox'>
                  <img id='showImg' src='../Public/images/{$row["movie_image"]}'/>
                  <div id='infoBox'>
                    <div id='title'> {$row['movie_title']} </div>
                    <div id='runtime'> {$row['movie_runtime']} min </div>
                    <div id='date'> {$row['movie_release_date']} </div>
                    <div id='des'> {$row['movie_description']} </div>
                    <div id='rating'> {$row['movie_rating']} </div>
                    
                    <div>
                    <a href='update_movie_form.php?id={$row['movies_id']}'>Update</a>
                    <a href='delete_movie.php?id={$row['movies_id']}'> Delete</a><br>
                    
                    
                    </div>
                  </div>
                </div>
              </div>
              
              <br><br>
            ";
          
          
//            echo "<a href='update_movie_form.php?id={$row['movies_id']}'>Update</a> ";
//            echo "<a href='delete_movie.php?id={$row['movies_id']}'> Delete</a><br> "; 
        }
    }       
}
    
mysqli_close($conn);
?>
<br>
<!--<a href="admin.php">Back to Admin</a>-->
       <?php require_once("../Private/shared/footer.php") ?>
</body>
</html>