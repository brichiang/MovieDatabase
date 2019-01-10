<!DOCTYPE html>
<html lang="en">
    <head>  
      
      <link href="../Public/stylesheet/mystyle.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  
  
    </head>
    <body>
        <?php require_once("../Private/shared/header.php") ?>
        
      <div class="contentclass"> 
      
    
        <h1>Add Actor Form</h1>
        
        <form method="post" action="add_actor.php">
            First Name<br>
            <input type="text" name="firstname" required>
            <br>
            
            Last Name<br>
            <input type="text" name="lastname" required>
            <br>
            
            Gender<br>
            Male<input type="radio" name="gender" value="M" required>
            Female<input type="radio" name="gender" value="F" required>
            <br>
            
            Birth Year<br>
            <input type="text" name="byear" min="1900" max="2018" required>
            <br>
            
            <button type="submit">Add Actor</button>
        </form>
<br>
        <a href="admin.php">Back to Admin</a>
      </div>
       <?php require_once("../Private/shared/footer.php") ?>
    </body>
</html>