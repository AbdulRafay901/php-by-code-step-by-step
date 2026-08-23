<?php
echo "<h1>Cookies</h1>";

$Name = "Rafay";

setcookie("Name",$Name,time()+(86400));

setcookie("Color","Blue", time()+(86400));

if(isset($_COOKIE['Name'])){
    echo "Current Cookie is ". $_COOKIE['Name'];
}else{
    echo "NO Cookie";
}
echo "<br>";
echo "<br>";
if(isset($_COOKIE['Color'])){
    echo "Current Cookie is ". $_COOKIE['Color'];
}else{
    echo "NO Cookie";
}





?>