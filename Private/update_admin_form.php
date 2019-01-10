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
      
     
        <h1>Update Admin Form</h1> 
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
     
    $res2 = mysqli_query($conn,"SELECT * FROM admins WHERE id='".$_GET["id"]."'");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo 
            "<form method='post' action='update_admin.php'>";
            
            echo 
            "<input type='hidden' name='id' value='{$row["id"]}'>";
            
            echo
            "First Name<br>
            <input type='text' name='firstname' required value='{$row["first_name"]}'><br>";
            
            echo
            "Last Name<br>
            <input type='text' name='lastname' required value='{$row["last_name"]}'><br>";
            
            echo
            "Email<br>
            <input type='text' name='email' required value='{$row["email"]}'><br>";
            
            echo
            "username<br>
            <input type='text' name='username' required value='{$row["username"]}'><br>";
          
            echo
            "password<br>
            <input type='text' name='password' required value='{$hashedpassword}'><br>";
            
            echo
            "<button type='submit'>Update Admin</button>
            </form>";
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