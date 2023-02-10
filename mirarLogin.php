<?php
    require("db.php");
    session_start();
    
    // Este es el objeto de tipo conexion para la BD $conn->
    if(isset($_POST['password'])){
        //$pcheck = $salt.$_POST['floatingPassword'];
        //$pcifrado = hash("sha256",$pcheck);
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE nombre=:us AND contraseña=:pw");
        $stmt->bindParam(':us', $_POST['correo']);
        $stmt->bindParam(':pw', $_POST['password']);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
        if(count($stmt->fetchAll())==1){
            $_SESSION['autorizado']=true;
           /* if($_POST["idioma"]!=""){
                setcookie("idioma",$_POST["idioma"],time()+900);
            }*/
            var_dump($_POST);    
            $conn = null;
            header("Location:index.html");
        }  else{
            header("Location:login.html");
        }
            
    }else{
        header("Location:login.html");
    
    }
?>