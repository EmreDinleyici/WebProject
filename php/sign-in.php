<?php
    require("config.php");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['email'])){
            $email = Filter(mysqli_real_escape_string($database, $_POST['email']));
        }else{
            $email = "";
        }

        if(isset($_POST['password'])){
            $password = Filter(mysqli_real_escape_string($database, $_POST['password']));
        }else{
            $password = "";
        }


        $login_time = date("Y-m-d H:i:s");
        

        $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $sql2 = "UPDATE users SET last_enter ='$login_time' WHERE email = '$email' and password = '$password'";

        if (!($result = mysqli_query($database, $sql))) {
            echo ("Could not execute sql! <br>");
            die("</body></html>");
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        mysqli_fetch_array($result, MYSQLI_NUM);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION["user"] = $email;
            mysqli_query($database, $sql2);
            header("Location: http://localhost/Proje/index.php");
            exit;
        } 
        else {
            echo "Your username or Password is invalid";
            echo "<br>You will redirect to sign-in page in 5 second";
            header("Refresh: 5; url = 'http://localhost/Proje/sign-in.html'");
            exit;
        }
    }

?>