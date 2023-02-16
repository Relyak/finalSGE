<?php
require('check_login.php');
require('db.php');

var_dump($_POST);
$sql = "UPDATE conductor SET nombre = :name, 
            apellidos = :nacion, 
            altura = :altura,  
            debut = :debut,  
            palmares = :palmares  
            WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $_POST["nombre"], PDO::PARAM_STR); 
$stmt->bindParam(':nacion', $_POST["nacionalidad"], PDO::PARAM_STR);
$stmt->bindParam(':altura', $_POST["altura"], PDO::PARAM_STR);
$stmt->bindParam(':debut', $_POST["debut"], PDO::PARAM_STR);
$stmt->bindParam(':palmares', $_POST["palmares"], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST["id"], PDO::PARAM_STR); 

if($stmt->execute()==true)
    header("Location: golfers.php");
?>