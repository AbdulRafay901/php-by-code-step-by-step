<?php

require_once 'Dropdown.php';
     


class insert{

      private $connection;

    function __construct($con){

        $this->connection = $con;

    }


    function insert(){
        $send = $this->connection->prepare("INSERT INTO dropdown (Name, Age, Email) VALUES (?, ?, ?)");
        $send->execute(["Rafay",19,"Shaikhsabah979@gmail.com"]);
    }
}

$insert = new insert($con);

$insert->insert();


?>