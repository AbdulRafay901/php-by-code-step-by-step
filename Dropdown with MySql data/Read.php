<?php

require_once 'Dropdown.php';


class Read{

    private $db;

    function __construct($con){

        $this->db=$con;

    }

    function Read(){
        $query = "SELECT * FROM dropdown";
        $Read = $this->db->prepare($query);
        $Read->execute();

        $result = $Read->fetchAll();

     
            echo "<select>";
            

                echo "<option>Select</option>";
                foreach($result as $rows){

                    echo "<option value=0> ".$rows['Name']."</option>";

                  }
          
            echo "</select>";
        
    }
}

$read = new Read($con);
$read->Read();


?>