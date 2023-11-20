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

        if(isset($_POST['phone'])){
            $phone = Filter(mysqli_real_escape_string($database, $_POST['phone']));
        }else{
            $phone = "";
        }

        if(isset($_POST['gender'])){
            $gender = Filter(mysqli_real_escape_string($database, $_POST['gender']));
        }else{
            $gender = "";
        }
        
        if(isset($_POST['email'])){
            $email = Filter(mysqli_real_escape_string($database, $_POST['email']));
            $email = strtolower($email);
        }else{
            $email = "";
        }
        
        
        if(isset($_POST['password'])){
            $password = Filter(mysqli_real_escape_string($database, $_POST['password']));
        }else{
            $password = "";
        }


        $registration_time = date("Y-m-d H:i:s");

        $query = "SELECT * FROM users WHERE email = '$email'";
       
        if (!($queryResult = mysqli_query($database, $query))) {
            echo ("Could not execute sql! <br>");
            die("</body></html>");
        }

        $row = mysqli_fetch_array($queryResult, MYSQLI_ASSOC);
        mysqli_fetch_array($queryResult, MYSQLI_NUM);
        $count = mysqli_num_rows($queryResult);

        if ($count == 1) {
            echo "This email address used before you cannot use again, Please use another email address";
            echo "<br>You will redirect to sign-up page in 5 second";
            header("Refresh: 5; url = 'http://localhost/Proje/sign-up.html'");
        } 
        else {
            $sql = "INSERT INTO users (name, surname, phone, gender, email, password, first_registration) VALUES ('$name', '$surname', '$phone', '$gender', '$email', '$password', '$registration_time')";
            $result = mysqli_query($database, $sql);
            if($result){
                echo "Records added succesfully";
                echo "<br>You will redirect to sign-in page in 5 second";
                header("Refresh: 5; url = 'http://localhost/Proje/sign-in.html'");
                exit;
            }
            else{
                echo "ERROR: Could not able to execute $sql";
                echo "<br>You will redirect to sign-up page in 5 second";
                header("Refresh: 5; url = 'http://localhost/Proje/sign-up.html'");
                exit;
            }
        }
   
    }

?>