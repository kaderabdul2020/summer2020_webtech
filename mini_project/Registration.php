<?php
if(isset($_POST["register"])){
    $id=$_POST['id'];
    $password=$_POST['pass'];
    $confirmpassword=$_POST['cpass'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $usertype=$_POST['usertype'];
    if(empty($id) || empty($password) ||  empty($confirmpassword) || empty($email) || empty($usertype)){
        echo "empty fields doesn't allowed";
    }else{
        echo "Submitted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REGISTRATION</title>
</head>
<body>
    <form action="login.php" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
            Id<br/>
            <input type="text" name="id"><br/>
            Password<br/>
            <input type="password" name="pass"><br/>
            Confirm Password<br/>
            <input type="password" name="cpass"><br/>
            Name<br/>
            <input type="text" name="name"><br/>
            Email<br/>
            <input type="email" name="email"><br/>
            User Type [User/Admin]<br/><select name="usertype">
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select></br></br><hr>
            <input type="submit" value="Register" name="register">
            <a href="login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>