<?php
// require('check_login.php');
require('../../../db.php');
var_dump($_POST);
$sql = "UPDATE origen SET nombre = :name, 
            ciudad = :ciudad, 
            cp = :cp,  
            telefono = :telefono,  
            direccion = :direccion 
            WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $_POST["nombre"], PDO::PARAM_STR); 
$stmt->bindParam(':ciudad', $_POST["ciudad"], PDO::PARAM_STR);
$stmt->bindParam(':cp', $_POST["cp"], PDO::PARAM_STR);
$stmt->bindParam(':telefono', $_POST["telefono"], PDO::PARAM_STR);
$stmt->bindParam(':direccion', $_POST["direccion"], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST["id"], PDO::PARAM_STR); 
if($stmt->execute()==true)
    header("Location: ../../../home.php");
?>