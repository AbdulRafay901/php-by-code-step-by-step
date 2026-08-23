<?php

$file = fopen('data.txt', 'w');

if($file){
    fwrite($file, "Hello i am a full stack web developer! \n");
    fwrite($file, "backend in progress \n");
    fclose($file);
   echo "data likh diya gaya he";
} 
else{
    echo "NHI likha he";
}


echo "<br>";
echo "<br>";
echo "<br>";


$file_Read = fopen("data.txt", 'r');

if($file_Read){
    $content = fread($file_Read, filesize('data.txt'));
    fclose($file_Read);
    echo nl2br($content);
}else{
    echo "Fill open nhi hoi he";
}



echo "<br>";
echo "<br>";
echo "<br>";



if(file_exists('data.txt')){
    unlink('data.txt');

    echo "file Destory";
}
?>