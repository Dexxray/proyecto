<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="../proyecto/estilos/estilo_login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="../proyecto/config/isesion.php" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" id="iusuario" name="iusuario" class="form-control input_user" required placeholder="usuario">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"></i></span>
                            </div>
                            <input type="password" id="ipass" name="ipass" class="form-control input_pass" required placeholder="contraseña">
                        </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" name="enviar" class="btn login_btn">Entrar</button>
                   </div>
                    </form>
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        ¿Aun no tienes una cuenta?<a href="../proyecto/registro.php" class="ml-2">Registrarse</a>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-center links">
                        <a href="../proyecto/index.php" class="ml-2">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if (isset($_POST['enviar'])){
    require ("isesion.php");

}
?>
</body>
</html>