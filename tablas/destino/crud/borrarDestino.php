<?php

require('../../../db.php');
$id=$_GET["id"];
var_dump($id);
if (isset($id)) {
   
        // your code to execute when confirmed
        $sql = "DELETE FROM destino 
        WHERE id = :id";
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id); 
        if($stmt->execute()==true)
        header("Location: ../../../home.php");
   
}


?>