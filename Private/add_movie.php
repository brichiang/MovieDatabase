<?php
$servername = 'localhost'; $username = 'brianchiang'; $password = 'Brian';
$dbname = 'movies_db';
// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection 
if (!$conn) {
die("Connection failed: " . mysqli_connect_error()); }
else{
echo "<h1>Connected successfully</h1>";
  
$sql = "INSERT INTO movies (movie_title, movie_runtime, movie_release_date, movie_description, movie_rating, movie_image, movie_genre)
VALUES ('".$_POST["title"]."','".$_POST["runtime"]."','".$_POST["date"]."','".$_POST["description"]."','".$_POST["rating"]."','".$_POST["image"]."'";
  
$res2 = mysqli_query($conn,$sql);
if($res2 === TRUE){
echo "New movie created successfully"; 
echo "<br><br>";
echo "<a href='admin.php'>Admin</a><br> "; 
}
else{
echo "Insert failed"; }
} ?>