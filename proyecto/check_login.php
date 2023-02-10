<?php
session_start();
if($_SESSION['autorizado']==false)
    header("Location: login.php");
// si no estoy autorizado, que me lleve a login.php
?>