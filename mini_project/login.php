<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['pass'];
    if(empty($name) || empty($password)){
        echo "must be fill up";
    }else{
        echo "thanks for Info";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>LOGIN</title>
</head>
<body>
    <form action="" method="post">
     <fieldset>
         <legend>LOGIN</legend>
         User Id<br/>
         <input type="text" name="uid"><br/>
         Password<br/>
         <input type="password" name="pass"><br/>
         <input type="checkbox" name="rmme" value="Remember Me">Remember Me<br/><hr/>
         <input type="submit" value="Login" name="submit">
         <a href="Registration.php">Register</a>
     </fieldset>
    </form>
        
</body>
</html>