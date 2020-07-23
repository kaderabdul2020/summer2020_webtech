<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Gender</legend>
    <input type="radio" name="male" select>Male
    <input type="radio" name="female">Female
    <input type="radio" name="others">Others
    </fieldset>
    
    <input type="submit" value="submit">
    
    </form>
</body>
</html>

<?php

if(empty($_POST['submit'])){
    echo "At least one of them has to be selected";
    }


?>