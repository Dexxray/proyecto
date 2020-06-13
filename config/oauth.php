<!--Proyecto inacabado-->
<?php
try {
    $oauth = new OAuth(OAUTH_CONSUMER_KEY,OAUTH_CONSUMER_SECRET);
    $oauth->setToken($token,$tokensecret);
    $access_info = $oauth->getAccessToken("https://www.googleapis.com/auth/indexing");
    if(!empty($access_info)) {
        setcookie("usuario", time()+84600);
		echo'<script type="text/javascript">alert("Bienvenido");window.location.href="../ppal.php";</script>';
    } else {
        echo'<script type="text/javascript">alert("Error de oauth");window.location.href="../index.php";</script>';
    }
} catch(OAuthException $E) {
    echo "Respuesta: ". $E->lastResponse . "\n";
}
?>