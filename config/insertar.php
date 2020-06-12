<?php
$usuario = $_POST ['usuario'];
$email = $_POST ['email'];
$pass = $_POST ['pass'];

require ("conexion.php");
$sql = ("INSERT INTO usuarios (usuario,email,pass) VALUES ('$usuario','$email','$pass')");

if (mysqli_query($conn, $sql)) {
 	setcookie("usuario", time()+84600)
 	echo'<script type="text/javascript">alert("Registrado correctamente");window.location.href="/ppal.php";</script>';

} else {
	echo'<script type="text/javascript">alert("Error de registro");window.location.href="/registro.php";</script>';
}

mysqli_close($conn);
?>

