<?php
if(isset($_POST['submit'])){

    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    

    if(!in_array($ext, $allowed)){
        echo "❌ Sirf image file upload kar sakte ho!";
        exit;
    }

   elseif($filesize > 2 * 1024 * 1024){
        echo "❌ File size zyada hai! (max 2MB)";
        exit;
    }

    list($width, $height) = getimagesize($tmp_name);
    if($width > 1000 || $height > 1000){
        echo "❌ Image bahut badi hai! (max 1000x1000)";
        exit;

    }


    // uniqe Name and Folder

    $newName = uniqid("img_", true). "." . $ext;
    // if(!file_exists('upload')){
    //     mkdir('upload', 0777, true);
    //  Optional code ye code is liye likhte he agar hamare pass Upload folder nhi heto
    // ye bana dega }//


    $folder = "uploads/" . $newName;


    if(move_uploaded_file($tmp_name,$folder)){
        echo "✅ File successfully uploaded!";

        echo "<img src='$folder' width='300'>";
    } else{
        echo "❌ File upload failed";
    }
}

?> 




<?php

if(isset($_POST['submit'])){

    $filename = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if(!in_array($ext, $allowed)){
        echo "❌ Sirf image file upload kar sakte ho!";
        exit;
    }

    elseif($size > 2 * 1024 * 1024){
        echo "❌ File size zyada hai! (max 2MB)";
        exit;
    }

    list($width, $height) = getimagesize($tmp_name);
    if($width > 1000 || $height > 1000){
        echo "❌ Image bahut badi hai! (max 1000x1000)";
    }

    $newName = uniqid("img_", true). "." . $ext;

    $folder = "uploads/" . $newName;

    if(move_uploaded_file($tmp_name, $folder)){
        echo "Image folder me agayi he";

        echo "<img src='$folder'>";
    }else{
        echo "Image me nhi ayi he";
    }

}

?>