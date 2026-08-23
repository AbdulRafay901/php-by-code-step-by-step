<?php

try {
    //code...
$database = "mysql:host=localhost;dbname=imageupload";
$username = "root";
$password = "";

$conn = new PDO($database,$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo "Database error: " . $e->getmessage();
   
}




if(isset($_POST['submit'])){
    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if(!in_array($ext,$allowed)){
        echo "❌ Sirf image file upload kar sakte ho!";
        exit;
    }

    elseif($size > 2 * 1024 * 1024){
         echo "❌ File size zyada hai! (max 2MB)";
         exit;
    }
    list($width,$height) = getimagesize($tmp_name);
    if($width > 1000 || $height > 1000){
         echo "❌ Image bahut badi hai! (max 1000x1000)";
        exit;
    }

    $newName = uniqid("img_", true). "." . $ext;

    $folder = "Upload/" . $newName;

    if(move_uploaded_file($tmp_name,$folder)){
          echo "✅ File successfully uploaded!";

          $insert = $conn->prepare("INSERT INTO upload (image) VALUES (?)");
          $insert->execute([$newName]);

          $read = $conn->prepare("SELECT * FROM upload");
          $read->execute();
          $data = $read->fetchAll(PDO::FETCH_ASSOC);

          foreach($data as $all){
            echo "<img src='Upload/". $all['image']." ' width='200'>";
          }

    } else{
        echo "File Upload Nhi hoi he";
    }

}

?>