<?php
    session_start();
    ob_start();
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'project');
    
    /* Attempt to connect to MySQL database */
    $database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($database === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    function Filter($value){
        $one = trim($value);
        $two = strip_tags($one);
        $three = htmlspecialchars($two, ENT_QUOTES);
        $res = $three;
        return $res;
    }

    date_default_timezone_set('Etc/GMT-3');

?>