<?php
// require('check_login.php');
require('..\..\db.php');
$id=$_GET["id"];
if (isset($id)) {
    if (window.confirm("eliminar?")) {
        // your code to execute when confirmed
        $sql = "DELETE FROM conductor 
        WHERE id = :id";
    
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id); 
    
        if($stmt->execute()==true)
        header("Location: home.php");
      }else{
        header("Location: home.php");
      }
   
}


?>