<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
    <form action="email.php" method="post">
    Email <br/>  <input type="email" name="email"><br/>
    <input type="submit"  value="submit">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST['email'];
}
?>