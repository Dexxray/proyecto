<?php
if (count($_COOKIE) > 0) {
	header('Location: /proyecto/ppal.php');
	
} else {
	header('Location: /proyecto/login.php');
}


?>