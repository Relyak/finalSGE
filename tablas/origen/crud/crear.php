<?php
require('../../../check_login.php');
require('../../../db.php');

var_dump($_POST);
$sql = "INSERT INTO origen (nombre, ciudad, cp ,telefono ,direccion) VALUES
(:name,:ciudad,:cp,:telefono,:direccion)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $_POST["nombre"], PDO::PARAM_STR); 
$stmt->bindParam(':ciudad', $_POST["ciudad"], PDO::PARAM_STR);
$stmt->bindParam(':cp', $_POST["cp"], PDO::PARAM_STR);
$stmt->bindParam(':telefono', $_POST["telefono"], PDO::PARAM_STR);
$stmt->bindParam(':direccion', $_POST["direccion"], PDO::PARAM_STR);

if($stmt->execute()==true)
    header("Location: ../../../home.php");
?>