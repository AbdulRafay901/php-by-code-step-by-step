<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">

<input type="text" name="name" placeholder="Username">

<br>
<br>
<button type="submit" name="set">Set Cookies</button>

<button type="submit" name="Display">Display Cookies</button>

<button type="submit" name="delete">Delete Cookies</button>

</form>
    
</body>
</html>


<?php

if(isset($_POST['set'])){
    $name = $_POST["name"];

    setcookie("Name", $name,time()+(86400));

    if($_COOKIE['Name']){
        echo "Cookies Set";
    }
    else{
        echo "<p style='color: red;'>Unset Cookie</p>";
    }
}


if(isset($_POST['Display'])){
    // $name = $_POST["name"];

    // setcookie("Name", $name,time()+(86400));

    if(isset($_COOKIE['Name'])){
        echo "Cookie Name ". $_COOKIE['Name'];
    }
    else{
        echo "<p style='color: red;'>Unset Cookie</p>";
    }
}



if(isset($_POST['delete'])){
    // $name = $_POST["name"];

    // setcookie("Name", $name,time()+(86400));

    if(isset($_COOKIE['Name'])){
        setcookie("Name",null,-1);
    }
    else{
        echo "<p style='color: red;'>delete nhi ho</p>";
    }
}
?>