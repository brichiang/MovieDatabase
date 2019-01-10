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
        
        <div class="contentclass">

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
    echo "<h1>Genre</h1>";
        
    $res2 = mysqli_query($conn,"SELECT * FROM genres");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        //we will generate some dymaic sql
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo "<a href='update_genre_form.php?id={$row['genres_id']}'>Update</a> ";
            
            echo "{$row['genre_type']} ";

            
            echo "<a href='delete_genre.php?id={$row['genres_id']}'> Delete</a><br> "; 
        }
    }       
}
    
mysqli_close($conn);
?>
                
  <br><br>   
<a href="admin.php">Back to Admin</a>
        </div>

      <?php require_once("../Private/shared/footer.php") ?>
</body>
</html>