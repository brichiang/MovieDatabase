<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta chartset="utf-8">
        <title>Search Page</title>
        <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
      
       <?php require_once("../Private/shared/header.php") ?>
      
      <div id="content" class="contentclass">
      
      

        
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
  
  
    
echo "<form method='POST' action='search.php'>";
    
echo "<strong>Title</strong> &emsp;";
    
echo "<input type='text' id='titleInp' name='title' size='45'> &emsp;";
    
echo "<strong>Rating </strong>&emsp;";
echo "<select name='movie_rating'>";
echo "<option value='G'>G</option>";
echo "<option value='PG'>PG</option>";
echo "<option value='PG-13'>PG-13</option>";
echo "<option value='R'>R</option>";
echo "<select> &emsp;";
 
echo "<strong>Release Date</strong>&emsp;";    
echo "<input type='text' id='movie_release_date' name='movie_release_date' size='45'> &emsp;";   
    
echo "<button type='submit'>Submit</button>";
    
echo "</form>";


echo "<br>";
  echo "<br>";
  echo "<br>";
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $sql= "SELECT * FROM movies ";
    
    $sql.=" WHERE 1=1 ";
    
    if(isset($_POST['title']) && strlen( $_POST['title'])){
       $sql.="AND movie_title='".$_POST['title']."'";
    }
    
    if(isset($_POST['movie_rating']) && strlen( $_POST['movie_rating'])){
       $sql.="AND movie_rating='".$_POST['movie_rating']."'";
    }
    
    if(isset($_POST['movie_release_date']) && strlen( $_POST['movie_release_date'])){
       $sql.="AND movie_release_date LIKE '%".$_POST['movie_release_date']."%';";
    }

    
    $res2 = mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        //we will generate some dymaic sql
        while($row = mysqli_fetch_assoc($res2)) {
          
          echo "
                <div id='movieBox'>
                  <img id='showImg' src='.././Public/images/".htmlspecialchars("{$row['movie_image']}")."'>
                  <div id='infoBox'>
                    <div id='title'> {$row['movie_title']} </div>
                    <div id='runtime'> {$row['movie_runtime']} min </div>
                    <div id='date'> {$row['movie_release_date']} </div>
                    <div id='des'> {$row['movie_description']} </div>
                    <div id='rating'> {$row['movie_rating']} </div>
                  </div>
                </div>
          <br><br>
          ";
        }
    }
}   
}
    
mysqli_close($conn);
?>
              </div>

    <?php require_once("../Private/shared/footer.php") ?>
</body>
</html>