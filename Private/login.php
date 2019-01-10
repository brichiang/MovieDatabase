<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta chartset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1> 
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
    //get the users password
    $password = $_POST["password"];
     
    //see if can find a user
    $sql = "SELECT * FROM admins WHERE username='".$_POST["username"]."';";

    //echo $sql;
    
    $res2 = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res2) > 0) {
        
        $row = mysqli_fetch_assoc($res2);
        
        //see if there password matches the one in db
        $allowed = password_verify($password,$row["hashed_password"]);
        
        if($allowed){
            echo "access granted!";
           
            //Create some session variables
            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            
            echo $_SESSION["id"];
            echo $_SESSION["username"];

            //go to the admin area
            header( 'Location: ../private/admin.php' );
        }
        else{
            //send back to login page
            header( 'Location: login.php' ); 
        }
    }       
}
mysqli_close($conn);       
?>
<!--
<br>
        <a href="admin.php">Back to Admin</a>
-->
</body>
</html>