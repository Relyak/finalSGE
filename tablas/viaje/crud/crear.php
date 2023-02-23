<?php
require('../../../check_login.php');
require('../../../db.php');

var_dump($_POST);

$sql = "INSERT INTO viaje (id_pedido, id_origen, id_destino ,id_fecha ,id_conductor) VALUES
(:name,:id_origen,:id_destino,:id_fecha,:id_conductor)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $_POST["id_pedido"], PDO::PARAM_STR); 
$stmt->bindParam(':id_origen', $_POST["id_origen"], PDO::PARAM_STR);
$stmt->bindParam(':id_destino', $_POST["id_destino"], PDO::PARAM_STR);
$stmt->bindParam(':id_fecha', $_POST["id_fecha"], PDO::PARAM_STR);
$stmt->bindParam(':id_conductor', $_POST["id_conductor"], PDO::PARAM_STR);

if($stmt->execute()==true)
    header("Location: ../../../home.php");
?>