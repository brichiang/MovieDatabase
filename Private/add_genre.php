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
  
$sql = "INSERT INTO genres (genre_type)
VALUES ('".$_POST["genre"]."')";
  
$res2 = mysqli_query($conn,$sql);
if($res2 === TRUE){
echo "New movie created successfully"; 
echo "<br><br>";
echo "<a href='admin.php'>Admin</a><br> "; 
}
else{
echo "Insert failed"; }
} ?>