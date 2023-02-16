<?php
require('check_login.php');
require('db.php');
$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM conductor WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar golfista</title>
</head>
<body> 
    <form action="modificarGolfer.php" method="post">
        Nombre<input type="text" name="nombre" id="nombre" value='<?php echo$result["nombre"] ?>'><br>
        Nacionalidad<input type="text" name="nacionalidad" id="nacionalidad" value='<?php echo$result["nacionalidad"] ?>'><br>
        Altura<input type="text" name="altura" id="altura" value='<?php echo$result["altura"] ?>'><br>
        Debut<input type="text" name="debut" id="debut" value='<?php echo$result["debut"] ?>'><br>
        Palmarés<input type="text" size="100" name="palmares" id="palmares" value='<?php echo$result["palmares"] ?>'><br>
        <input type="hidden" name="id" value='<?php echo $id ?>'>
        <input type="submit" value="MODIFICAR">
    </form>
    <a href="golfers.php">Volver sin modificar</a>
</body>
</html>