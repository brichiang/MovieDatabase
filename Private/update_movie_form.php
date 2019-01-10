<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>  
        <meta chartset="utf-8">
        <title>Update Movie Form</title>
      
           <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    </head>
    <body>
      
      <?php require_once("../Private/shared/header.php") ?>
      
      <div class="contentclass">
        <h3>Update Movie </h3> 
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
     
    $res2 = mysqli_query($conn,"SELECT * FROM movies WHERE movies_id='".$_GET["id"]."'");
    
    //go get all the genres from genres table
    //we will use this to populate the genre options
    $res3 = mysqli_query($conn,"SELECT * FROM genres");
    
    //loopup the exist genre for this movie
    $res4 = mysqli_query($conn,"SELECT * FROM movie_genres WHERE movies_movies_id='".$_GET["id"]."'");
    
    //store genre info in a variable
    $genreinfo = mysqli_fetch_assoc($res4);
    
    if (mysqli_num_rows($res2) > 0) {
        //echo "we have some results";
        
        while($row = mysqli_fetch_assoc($res2)) {
            
            echo 
            "<form method='post' action='update_movie.php'>";
            
            echo 
            "<input type='hidden' name='movies_id' value='{$row["movies_id"]}'>";
            
            echo
            "Movie Title<br>
            <input type='text' name='movie_title' required value='{$row["movie_title"]}'><br>";
            
            echo
            "Movie Run Time<br>
            <input type='text' name='movie_runtime' required value='{$row["movie_runtime"]}'><br>";
            
            echo
            "Movie Release Date<br>
            <input type='text' name='movie_release_date' required value='{$row["movie_release_date"]}'><br>";
            
            echo
            "Movie Description<br>
            <textarea rows='20' cols='60' name='movie_description'>{$row["movie_description"]}</textarea><br>";
            
            if($row["movie_rating"]=="G"){
            echo
            "Movie Rating<br>
            <select name='movie_rating'>
                <option selected>G</option>
                <option>PG</option>
                <option>PG-13</option>
                <option>R</option>
            <select><br>";
            }
            elseif($row["movie_rating"]=="PG"){
            echo
            "Movie Rating<br>
            <select name='movie_rating'>
                <option>G</option>
                <option selected>PG</option>
                <option>PG-13</option>
                <option>R</option>
            <select><br>";
            }
            elseif($row["movie_rating"]=="PG-13"){
            echo
            "Movie Rating<br>
            <select name='movie_rating'>
                <option>G</option>
                <option>PG</option>
                <option selected>PG-13</option>
                <option>R</option>
            <select><br>";
            }
            else{
            echo
            "Movie Rating<br>
            <select name='movie_rating'>
                <option>G</option>
                <option>PG</option>
                <option>PG-13</option>
                <option selected>R</option>
            <select><br>";   
            }
            
            echo
            "Movie Genre<br>
            <select name='movie_genre'>";
            //This is where we dynamically gen options
            while($row = mysqli_fetch_assoc($res3)) {
                if($genreinfo['genres_genres_id'] ===       $row['genres_id']){
                    //we will set this option selected 
                    echo "<option value='{$row['genres_id']}' selected>{$row['genre_type']}</option>";
                }
                else{
                    //we will not set this option selected
                    echo "<option value='{$row['genres_id']}'>{$row['genre_type']}</option>";
                }
            }       
            echo "<select><br>";
            
            echo
            "Movie Image<br>
            <input type='text' name='movie_image' required value='{$row["movie_image"]}'><br>";
            
            echo
            "<button type='submit'>Update Movie</button>
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