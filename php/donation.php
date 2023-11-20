<?php 
    require("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_SESSION['user'])){
            $mail = $_SESSION['user'];
            $query = "SELECT * FROM users WHERE email = '$mail'";
            $sonuc = mysqli_query($database, $query);
            $data = mysqli_fetch_assoc($sonuc);
            $name = $data['name'];
            $surname = $data['surname'];
            $phone = $data['phone'];
            $email = $data['email'];
            
            if(isset($_POST['city'])){
                $city = Filter(mysqli_real_escape_string($database, $_POST['city']));
            }else{
                $city = "";
            }
    
            if(isset($_POST['deliver'])){
                $deliver = Filter(mysqli_real_escape_string($database, $_POST['deliver']));
            }else{
                $deliver = "";
            }
    
            if(isset($_POST['item'])){
                $item = Filter(mysqli_real_escape_string($database, $_POST['item']));
                $item = strtolower($item);
            }else{
                $item = "";
            }
    
            if(isset($_POST['message'])){
                $message = Filter(mysqli_real_escape_string($database, $_POST['message']));
            }else{
                $message = "";
            }
    
    
            $donation_time = date("Y-m-d H:i:s");
    
            $file = $_FILES['file'];
    
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
    
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg', 'jpeg', 'png', 'apng', 'webp', 'svg');
    
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize <= 10*1024*1024){
                        //unqid() true creates uniqid according to time format microsecond
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = './uploads/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $sql = "INSERT INTO donations (name, surname, phone, email, city, deliver, itemName, location, message, donation_time) VALUES ('$name', '$surname', '$phone', '$email', '$city', '$deliver', '$item', '$fileDestination', '$message', '$donation_time')";
                        $result = mysqli_query($database, $sql);
    
                        if($result){
                            echo "Donation added succesfully";
                            echo "<br>You will redirect to home page in 5 second";
                            header("Refresh: 5; url = 'http://localhost/Proje/index.php'");
                            exit;
                        }
                        else{
                            echo "ERROR: Could not able to execute $sql";
                            echo "<br>You will redirect to make-donation page in 5 second";
                            header("Refresh: 5; url = 'http://localhost/Proje/make-donation.php'");
                            exit;
                        }
                    }else{
                        echo "File size is too big!";
                    }
                }else{
                    echo "There was an error uploading your file";
                }
            }else{
                echo "You cannot upload this type of files!";
            }

        }else{
            echo "User is not logged in please login";
            echo "<br>You will redirect to sign-in page in 5 second";
            header("Refresh: 5; url = 'http://localhost/Proje/sign-in.html'");
            exit;
        }

    }

?>