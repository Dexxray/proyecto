<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>
<head>
  <link href="estilos/estilo_registro.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
</head>
<body>
  <form class="formulario" action="../proyecto/config/insertar.php" method="post" enctype="multipart/form-data">
    <h4>Registro</h4>
    <input required class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario">
    <input required class="controls" type="email" name="email" id="email" placeholder="Email">
    <input required class="controls" type="password" name="pass" id="pass" placeholder="Contraseña">
    <p>Registrandome acepto<a href="/proyecto/cond.php">Terminos y Condiciones</a></p>
    <button class="boton" type="submit" name="enviar">Registrarse</button>
    <p><a href="/proyecto/validar.php">Iniciar sesion</a></p>
    <p><a href="/proyecto/index.php">Volver al inicio</a></p>
  </form>

<?php
if (isset($_POST['enviar'])){
    require ("insertar.php");

}

?>
</body>
</html>