<!DOCTYPE html>
<html lang="en">
    <head>  
          <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  
  
    </head>
    <body>
          <?php require_once("../Private/shared/header.php") ?>
      <div class="contentclass">
 
        <h1>Update Genre Form</h1> 
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
     
    $res2 = mysqli_query($conn,"SELECT * FROM genres WHERE genres_id='".$_GET["id"]."'");
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo 
            "<form method='post' action='update_genre.php'>";
            
            echo 
            "<input type='hidden' name='genres_id' value='{$row["genres_id"]}'>";
            
            echo
            "Genre <br>
            <input type='text' name='genre' required value='{$row["genre_type"]}'><br>";
  
          
             if($row["genre_type"]=="Action"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                        <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Horror"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                       <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Rom-Com"){
                echo
                    "Movie genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                        <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Mystery"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Adventure"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Science-Fiction"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Drama"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Musical"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }else if($row["genre_type"]=="Fantasy"){
                echo
                    "Movie Genre<br>
                    <select name='genre' required selected='{$row["genre_type"]}'>
                      <option value='Action'>Action</option>
                        <option value='Horror'>Horror</option>
                        <option value='Rom-Com'>Rom-Com</option>
                        <option value='Mystery'>Mystery</option>
                        <option value='Adventure'>Adventure</option>
                        <option value='Science-Fiction'>Science-Fiction</option>
                        <option value='Drama'>Drama</option>
                        <option value='Musical'>Musical</option>
                        <option value='Fantasy'>Fantasy</option>
                    </select><br>";
            }
          
          
          
            echo
            "<button type='submit'>Update Genre</button>
            </form>";
        }
    }       
}

mysqli_close($conn);
        
?>
        <br><br><br>
              <a href="admin.php">Back to Admin</a>
      
      </div>

       
        <?php require_once("../Private/shared/footer.php") ?>
</body>
</html>