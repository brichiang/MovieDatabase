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
  
$hashedpassword = password_hash($_POST["password"],PASSWORD_BCRYPT);

$sql = "INSERT INTO admins (first_name,last_name,email,username,hashed_password) VALUES ('{$_POST["firstname"]}','{$_POST["lastname"]}','{$_POST["email"]}','{$_POST["username" ]}','{$hashedpassword}')";
    
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