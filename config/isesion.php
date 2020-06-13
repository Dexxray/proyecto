<?php
require ("conexion.php");
session_start();

$iusuario = $_POST ['iusuario'];
$ipass = $_POST ['ipass'];
	
$dbuser = mysqli_query($conn, "SELECT usuario FROM usuarios WHERE usuario = '".$iusuario."'");
$dbpass = mysqli_query($conn, "SELECT pass FROM usuarios WHERE pass = '".$ipass."'");

$nr1 = mysqli_num_rows($dbuser);
$nr2 = mysqli_num_rows($dbpass);

if ($nr1 == 1) {
	
	if ($nr2 == 1) {
		setcookie("acceso", time()+3600);
		echo'<script type="text/javascript">alert("Bienvenido");window.location.href="../validar.php";</script>';

	} else {
		echo'<script type="text/javascript">alert("Contraseña incorrecta");window.location.href="../login.php";</script>';

	}

} else {
	echo'<script type="text/javascript">alert("Usuario incorrecto");window.location.href="../login.php";</script>';
}

mysqli_close($conn);
?>