<!DOCTYPE html>
<html lang="en">
    <head>  
  
    </head>
    <body>
        <h1>Update Actor Form</h1> 
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
     
    $res2 = mysqli_query($conn,"SELECT * FROM actors WHERE actors_id='".$_GET["id"]."'");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo 
            "<form method='post' action='update_actor.php'>";
            
            echo 
            "<input type='hidden' name='actors_id' value='{$row["actors_id"]}'>";
            
            echo
            "First Name<br>
            <input type='text' name='firstname' required value='{$row["actor_firstname"]}'><br>";
            
            echo
            "Last Name<br>
            <input type='text' name='lastname' required value='{$row["actor_lastname"]}'><br>";
            
            if($row["actor_gender"]=="M"){
            echo
                "Gender<br>
                Male<input type='radio' name='gender' value='M' required checked='checked'>
                Female<input type='radio' name='gender' value='F' required>
                <br>";
            }
            else{
            echo
               "Gender<br>
                Male<input type='radio' name='gender' value='M' required>
                Female<input type='radio' name='gender' value='F' required checked='checked'>
                <br>"; 
            }
            
            echo
            "Birth Year<br>
            <input type='text' name='byear' min='1900' max='2018' required value='{$row["actor_birthyear"]}'><br>";
            
            echo
            "<button type='submit'>Update Actor</button>
            </form>";
        }
    }       
}

mysqli_close($conn);
        
?>
<br>
        <a href="admin.php">Back to Admin</a>
</body>
</html>