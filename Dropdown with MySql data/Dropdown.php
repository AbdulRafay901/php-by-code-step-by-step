<?php


class Database{


     private $conn;

     public function __construct($host, $db, $user , $pass){ 
try{



  

    $this->conn = new PDO("mysql:host=$host;dbname=$db", $user , $pass);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


} catch(PDOException $e){
    echo "Connection Error: " . $e->getmessage();
}

   }


 function getconn(){
    return $this->conn;
 }

}

$db = new Database("localhost", "sql" , "root", "");

$con = $db->getconn(); 






?>