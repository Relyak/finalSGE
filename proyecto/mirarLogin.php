<?php
    require("db.php");
    session_start();
    //print_r($_COOKIE);
    // Este es el objeto de tipo conexion para la BD $conn->
    var_dump($_POST);
    if(isset($_POST['passw'])){
        //$pcheck = $salt.$_POST['contraseña'];
        //$pcifrado = hash("sha256",$pcheck);
        var_dump($_POST);
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE nombre=:nm AND contraseña=:pw");
        $stmt->bindParam(':nm', $_POST['usuario']);
        $stmt->bindParam(':pw', $_POST['passw']);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        var_dump($_POST);   
        if(count($stmt->fetchAll())==1){
            $_SESSION['autorizado']=true;
           /* if($_POST["idioma"]!=""){
                setcookie("idioma",$_POST["idioma"],time()+900);
            }*/
            var_dump($_POST);    
            $conn = null;
            header("Location:home.php");
        }  else{
            header("Location:login.php");
        }
            
    } else {
        header("Location:login.php");
    }     
    
?>
