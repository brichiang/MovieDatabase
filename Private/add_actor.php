<!DOCTYPE html>
<html lang="en">
    <head>  
  
    </head>
    <body>
        
<?php
$servername = "localhost"; $username = "brianchiang"; $password = "Brian";

$dbname = "movies_db";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); 
}
else{

echo "<h1>Connected successfully</h1>";

$sql = "INSERT INTO actors (actor_firstname, actor_lastname, actor_gender,actor_birthyear)
VALUES ('{$_POST["firstname"]}','{$_POST["lastname"]}','{$_POST["gender"]}','{$_POST["byear"]}')";
    
    $res2 = mysqli_query($conn,$sql);

    if($res2 === TRUE){
        echo "New record created successfully"; }
    else{
    echo "Insert failed"; 
    }
} 


    
mysqli_close($conn);

?>
<br>
<a href="admin.php">Back to Admin</a>
</body>
</html>