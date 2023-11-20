<?php 
    require("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_SESSION['user'])) {
            $mail = $_SESSION['user'];
            $query = "SELECT * FROM users WHERE email = '$mail'";
            $sonuc = mysqli_query($database, $query);
            $data = mysqli_fetch_assoc($sonuc);
            $name = $data['name'];
            $surname = $data['surname'];
            $phone = $data['phone'];
            $email = $data['email'];

            if (isset($_POST['item'])) {
                $item = Filter(mysqli_real_escape_string($database, $_POST['item']));
            } else {
                $item = "";
            }

            if (isset($_POST['city'])) {
                $city = Filter(mysqli_real_escape_string($database, $_POST['city']));
            } else {
                $city = "";
            }

            if (isset($_POST['address'])) {
                $address = Filter(mysqli_real_escape_string($database, $_POST['address']));
                $address = strtolower($item);
            } else {
                $address = "";
            }

            if (isset($_POST['salary'])) {
                $salary = Filter(mysqli_real_escape_string($database, $_POST['salary']));
            } else {
                $salary = "";
            }

            if (isset($_POST['message'])) {
                $message = Filter(mysqli_real_escape_string($database, $_POST['message']));
            } else {
                $message = "";
            }

            $message_time = date("Y-m-d H:i:s");

            $sql = "INSERT INTO needdonation (name, surname, phone, email, item, city, address, salary, message, message_time) VALUES ('$name', '$surname', '$phone', '$email', '$item', '$city', '$address', '$salary', '$message', '$message_time')";
            $result = mysqli_query($database, $sql);

            if($result){
                echo "Your request added system succesfully";
                echo "<br>You will redirect to home page in 5 second";
                header("Refresh: 5; url = 'http://localhost/Proje/index.php'");
                exit;
            }
            else{
                echo "ERROR: Could not able to execute $sql";
                echo "<br>You will redirect to make-donation page in 5 second";
                header("Refresh: 5; url = 'http://localhost/Proje/need-donation-page.php'");
                exit;
            }

        }
    }

?>