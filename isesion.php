<?php
require ("conexion.php");

$usuario = $_POST ['usuario'];
$password = $_POST ['password'];
	
$dbuser = mysqli_query("SELECT usuario FROM usuarios WHERE usuario = '$usuario'");
$dbpass = mysqli_query("SELECT contraseña FROM usuarios WHERE contraseña ='$password'");

if ($usuario == $dbuser) {
	if ($password == $dbpass) {
		echo "Bienvenido";

	} else {
		echo "Contraseña incorrecta";
	}


} else {
	echo "usuario incorrecto";
}

mysqli_close($conn);
?>