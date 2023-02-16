<?php
// require('check_login.php');
require('..\..\..\db.php');

var_dump($_POST);
$sql = "UPDATE conductor SET nombre = :name, 
            apellidos = :apellidos, 
            dni = :dni,  
            matricula = :matricula,  
            telefono = :telefono,
            email =:email,
            nacionalidad=:nacion
            WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $_POST["nombre"], PDO::PARAM_STR); 
$stmt->bindParam(':apellidos', $_POST["apellidos"], PDO::PARAM_STR);
$stmt->bindParam(':dni', $_POST["dni"], PDO::PARAM_STR);
$stmt->bindParam(':matricula', $_POST["matricula"], PDO::PARAM_STR);
$stmt->bindParam(':telefono', $_POST["telefono"], PDO::PARAM_STR);
$stmt->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
$stmt->bindParam(':nacion', $_POST["nacionalidad"], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST["id"], PDO::PARAM_STR); 

if($stmt->execute()==true)
    header("Location: ../../../home.php");
?>