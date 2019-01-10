<?php
session_start();
if (!isset($_SESSION['id'])) {
    header( 'Location: login_form.php' ) ;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
  
    </head>
    <body>
        <h1>Movie Updated</h1>
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
    //this query will update the movies table
    $res2 = mysqli_query($conn,"UPDATE movies SET  movie_title='{$_POST["movie_title"]}' , movie_runtime='{$_POST["movie_runtime"]}', movie_release_date='{$_POST["movie_release_date"]}',movie_description='{$_POST["movie_description"]}',movie_rating='{$_POST["movie_rating"]}',movie_image='{$_POST["movie_image"]}' WHERE movies_id={$_POST['movies_id']};"); 
    
    //this query will update the movie_genre table
    $res2 = mysqli_query($conn,"UPDATE movie_genres SET  genres_genres_id='{$_POST["movie_genre"]}' WHERE movies_movies_id={$_POST['movies_id']};"); 
}
        
mysqli_close($conn);
        
?> 
<br>
        <a href="admin.php">Back to Admin</a>  
</body>
</html>