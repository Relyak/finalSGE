<?php

require('../../../db.php');
$id=$_GET["id"];
var_dump($id);
if (isset($id)) {
    if (window.confirm("eliminar?")) {
        // your code to execute when confirmed
        $sql = "DELETE FROM conductor 
        WHERE id_conductor = :id";
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_conductor', $id); 
    
        if($stmt->execute()==true)
        header("Location: ../../../home.php");
      }else{
        header("Location: ../../../home.php");
      }
   
}


?>