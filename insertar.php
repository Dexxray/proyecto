<?php
$usuario = $_POST ['usuario'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$reqlen = strlen ($usuario) * strlen ($email) * strlen ($password);

if ($reqlen > 0) {
	require ("conexion.php");
	$sql = "INSERT INTO usuarios (usuario, email, contraseña)
	VALUES ('$usuario', '$email', '$password')";

	if (mysqli_query($conn, $sql)) {
 		echo "Se ha registrado correctamente";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

} else {
	echo 'Rellene todos los campos';
}

mysqli_close($conn);
?>

