<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name</title>
</head>
<body>
    <form action="name.php" method="post">
    Name <br/>  <input type="text" name="uname"><br/>
    <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['uname'];

	if($name == "")
	{
       
        echo "Cannot be empty";
	}
	
    else if($name < 2){
        echo "Contains at least two words";
    }

    else{
        echo $name;
    }
}

?>