<?php


// Acha // JSON_Encode // jo he wo PHP data ko JSON string me convert krta he //
// or JSON_decode // JSON string ko PHP data me convert krta he // s

$data = ["name" => "rafay", "Age" => "20"];
$convert = json_encode($data);

print_r($convert);

echo '<br>';

$data = '{"Name":"Rafay", "Age":"20"}';
$convert = json_decode($data,true);

print_r($convert);








?>