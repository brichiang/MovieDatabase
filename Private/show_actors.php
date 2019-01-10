<!DOCTYPE html>
<html lang="en">
    <head>  
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
    echo "<h1>Actors</h1>";
        
    $res2 = mysqli_query($conn,"SELECT * FROM actors");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        //we will generate some dymaic sql
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo "<a href='update_actor_form.php?id={$row['actors_id']}'>Update</a> ";
            
            echo "{$row['actor_firstname']} ";
            
            echo "{$row['actor_lastname']} ";
            
            echo "{$row['actor_gender']} ";
            
            echo "{$row['actor_birthyear']}";
            
            echo "<a href='delete_actor.php?id={$row['actors_id']}'> Delete</a><br> "; 
        }
    }       
}
    
mysqli_close($conn);
?>
<br>
<a href="admin.php">Back to Admin</a>
       </div>
       <?php require_once("../Private/shared/footer.php") ?>
</body>
</html>