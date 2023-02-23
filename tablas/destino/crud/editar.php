<?php
// require('check_login.php');
require('../../../db.php');

var_dump($_POST);
$sql = "UPDATE destino SET cif = :cif, 
            nombre = :nombre, 
            direccion = :direccion  
            WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':cif', $_POST["cif"], PDO::PARAM_STR); 
$stmt->bindParam(':nombre', $_POST["nombre"], PDO::PARAM_STR);
$stmt->bindParam(':direccion', $_POST["direccion"], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST["id"], PDO::PARAM_STR); 

if($stmt->execute()==true)
    header("Location: ../../../home.php");


    
?>