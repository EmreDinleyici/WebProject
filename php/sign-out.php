<?php 
    require("config.php");

    //$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    unset($_SESSION["user"]);
    session_destroy();
    header("Location: http://localhost/Proje/index.php");
    exit();

?>