<!DOCTYPE html>
<html lang="en">
    <head>  
  
    </head>
    <body>
        <h1>Genre Updated</h1>
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
    //this is a dynamic update sql query
    $res2 = mysqli_query($conn,"UPDATE genres SET  genre_type='{$_POST["genre"]}'
    WHERE genres_id={$_POST['genres_id']};");  
}
        
mysqli_close($conn);
        
?> 
<br>
        <a href="admin.php">Back to Admin</a>  
</body>
</html>