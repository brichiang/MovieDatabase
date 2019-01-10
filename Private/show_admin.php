<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>


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

$hashedpassword = password_hash($_POST["password"],PASSWORD_BCRYPT);
      
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "<h1>Admins</h1>";
        
    $res2 = mysqli_query($conn,"SELECT * FROM admins");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        //we will generate some dymaic sql
        while($row = mysqli_fetch_assoc($res2)) {
            
        
            
            echo "{$row['first_name']} ";
            echo "<br>";
            
            echo "{$row['last_name']} ";
            echo "<br>";
            
            echo "{$row['email']} ";
            echo "<br>";
            
            echo "{$row['username']}";
            echo "<br>";
          
            echo "{$hashedpassword}";
            echo "<br><br>";
              echo "<a href='update_admin_form.php?id={$row['id']}'>Update</a> ";
             echo "<a href='delete_admin.php?id={$row['id']}'> Delete</a><br> "; 
          
          echo "<br><br>";
           
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