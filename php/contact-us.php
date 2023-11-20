<?php
    require("config.php");


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['name'])){
            $name = Filter(mysqli_real_escape_string($database, $_POST['name']));
            $name = ucwords(strtolower($name));
        }else{
            $name = "";
        }
        
        if(isset($_POST['surname'])){
            $surname = Filter(mysqli_real_escape_string($database, $_POST['surname']));
            $surname = ucfirst(strtolower($surname));
        }else{
            $surname = "";
        }
        
        if(isset($_POST['email'])){
            $email = Filter(mysqli_real_escape_string($database, $_POST['email']));
            $email = strtolower($email);
        }else{
            $email = "";
        }

        if(isset($_POST['phone'])){
            $phone = Filter(mysqli_real_escape_string($database, $_POST['phone']));
        }else{
            $phone = "";
        }

        if(isset($_POST['message'])){
            $message = Filter(mysqli_real_escape_string($database, $_POST['message']));
        }else{
            $message = "";
        }


        $message_time = date("Y-m-d H:i:s");


        $sql = "INSERT INTO contact(name, surname, email, phone, message, message_time) VALUES('$name', '$surname', '$email', '$phone', '$message', '$message_time')";

        $result = mysqli_query($database, $sql);

        if($result){
            echo "Your message succesfully received";
            echo "<br>You will redirect to contact-us in 5 second";
            header("Refresh: 5; url = 'http://localhost/Proje/contact-us-page.php'");
            exit;
        }
        else{
            echo "ERROR: Could not able to execute $sql";
            echo "<br>You will redirect to contact-us in 5 second";
            header("Refresh: 5; url = 'http://localhost/Proje/contact-us-page.php'");
            exit;
        }
    }

?>