<!--Proyecto inacabado-->
<?php
	session_start();
	setcookie("acceso",time()-3600);
	header('location: /proyecto/index.php');
	session_unset();
	session_destroy();
?>