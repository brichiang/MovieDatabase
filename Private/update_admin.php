

<!DOCTYPE html>
<html lang="en">
    <head>  

    </head>
    <body>
        
        <h1>Admin Updated</h1>
<?php
$servername = "localhost";
$username = "brianchiang";
$password = "Brian";
$dbname = "movies_db";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
      
$hashedpassword = password_hash($_POST["password"],PASSWORD_BCRYPT);
      
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{ 
    //this is a dynamic update sql query
    $res2 = mysqli_query($conn,"UPDATE admins SET  first_name='{$_POST["firstname"]}' , last_name='{$_POST["lastname"]}', 
    email='{$_POST["email"]}', 
    username='{$_POST["username"]}',
    hashed_password='{$hashedpassword}'
    WHERE id={$_POST['id']};");  
}
        
mysqli_close($conn);
        
?> 
<br>
        <a href="admin.php">Back to Admin</a>  
         
</body>
</html>