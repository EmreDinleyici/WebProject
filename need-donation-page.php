<?php
    require("./php/config.php");
    // echo $_SESSION["user"];

    if(!(isset($_SESSION["user"]))){
        echo "Before take donation you need to sign-in <br>";
        echo "<br>You will redirect to sign-in page in 5 second";
        header("Refresh: 5; url = 'http://localhost/Proje/sign-in.html'");
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Emre Dinleyici, emre.dinleyici@std.hku.edu.tr">
    <meta name="keywords" content="donate, donation, need-donation, help, unused stuf, help people, donate unused stuf, make differnece">
    <meta name="description" content="If you need help, you can create a request here.">
    <meta http-equiv="content-language" content="en">
    <meta name="Copyright" content="2022 by Emre Dinleyici All Rights Reserved">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Need-Donation</title>
    <link rel="shortcut icon" href="./images/MD_LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css" type="text/css"> 
    <link rel="stylesheet" href="./css/need-donation.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <nav class="row">
        <div class="col-6 reset">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact-us-page.php">Contact-Us</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Donate<i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                    <a href="make-donation.php">Make a Donation</a>
                    <a href="need-donation-page.php">Need a Donation?</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-6 reset">
            <a href="./php/sign-out.php"><button class="log">Sign-Out</button></a>
            <a><button class="log"><?php echo $_SESSION["user"];?></button></a>
        </div>
    </nav>

    <main>
        <div class="row">
            <div class="col-12">     
                <h1>Need Donation</h1>
                <form action="./php/need-donation.php" class="donate-form" method="post" enctype="multipart/form-data" autocomplete="off">
                    
                    <div class="input-wrap">
                        <label class="f-title" for="item">What You Need</label>
                        <input type="text" id="item" name="item" class="input" placeholder="What You Need" required>
                    </div>

                    <div class="input-wrap">
                        <label class="f-title" for="city">Where Are You Living</label>
                        <select name="city" id="city" class="input" required>
                        <option value="1">Adana</option>
                        <option value="2">Adıyaman</option>
                        <option value="3">Afyonkarahisar</option>
                        <option value="4">Ağrı</option>
                        <option value="5">Amasya</option>
                        <option value="6">Ankara</option>
                        <option value="7">Antalya</option>
                        <option value="8">Artvin</option>
                        <option value="9">Aydın</option>
                        <option value="10">Balıkesir</option>
                        <option value="11">Bilecik</option>
                        <option value="12">Bingöl</option>
                        <option value="13">Bitlis</option>
                        <option value="14">Bolu</option>
                        <option value="15">Burdur</option>
                        <option value="16">Bursa</option>
                        <option value="17">Çanakkale</option>
                        <option value="18">Çankırı</option>
                        <option value="19">Çorum</option>
                        <option value="20">Denizli</option>
                        <option value="21">Diyarbakır</option>
                        <option value="22">Edirne</option>
                        <option value="23">Elazığ</option>
                        <option value="24">Erzincan</option>
                        <option value="25">Erzurum</option>
                        <option value="26">Eskişehir</option>
                        <option value="27">Gaziantep</option>
                        <option value="28">Giresun</option>
                        <option value="29">Gümüşhane</option>
                        <option value="30">Hakkâri</option>
                        <option value="31">Hatay</option>
                        <option value="32">Isparta</option>
                        <option value="33">Mersin</option>
                        <option value="34">İstanbul</option>
                        <option value="35">İzmir</option>
                        <option value="36">Kars</option>
                        <option value="37">Kastamonu</option>
                        <option value="38">Kayseri</option>
                        <option value="39">Kırklareli</option>
                        <option value="40">Kırşehir</option>
                        <option value="41">Kocaeli</option>
                        <option value="42">Konya</option>
                        <option value="43">Kütahya</option>
                        <option value="44">Malatya</option>
                        <option value="45">Manisa</option>
                        <option value="46">Kahramanmaraş</option>
                        <option value="47">Mardin</option>
                        <option value="48">Muğla</option>
                        <option value="49">Muş</option>
                        <option value="50">Nevşehir</option>
                        <option value="51">Niğde</option>
                        <option value="52">Ordu</option>
                        <option value="53">Rize</option>
                        <option value="54">Sakarya</option>
                        <option value="55">Samsun</option>
                        <option value="56">Siirt</option>
                        <option value="57">Sinop</option>
                        <option value="58">Sivas</option>
                        <option value="59">Tekirdağ</option>
                        <option value="60">Tokat</option>
                        <option value="61">Trabzon</option>
                        <option value="62">Tunceli</option>
                        <option value="63">Şanlıurfa</option>
                        <option value="64">Uşak</option>
                        <option value="65">Van</option>
                        <option value="66">Yozgat</option>
                        <option value="67">Zonguldak</option>
                        <option value="68">Aksaray</option>
                        <option value="69">Bayburt</option>
                        <option value="70">Karaman</option>
                        <option value="71">Kırıkkale</option>
                        <option value="72">Batman</option>
                        <option value="73">Şırnak</option>
                        <option value="74">Bartın</option>
                        <option value="75">Ardahan</option>
                        <option value="76">Iğdır</option>
                        <option value="77">Yalova</option>
                        <option value="78">Karabük</option>
                        <option value="79">Kilis</option>
                        <option value="80">Osmaniye</option>
                        <option value="81">Düzce</option>
                    </select>
                        </div>

                    <div class="input-wrap">
                        <label class="f-title" for="address">Address</label>
                        <input type="text" id="address" name="address" class="input" placeholder="Address" required>
                    </div>

                    <div class="input-wrap">
                        <label class="f-title" for="salary">Your Monthly Income</label>
                        <input type="number" id="salary" name="salary" class="input" placeholder="Your Monthly Income" min="0" required>
                    </div>

                    <div class="input-wrap">    
                        <label for="message" class="f-title">Your Message</label>
                        <textarea name="message" id="message" class="textarea" cols="30" rows="10" placeholder="Type here your message..." required></textarea>
                    </div>

                    <input type="submit" id="submit" name="submit" value="Submit">
                
                </form>     
            </div>
        </div>
    </main>


    <footer>
        <div class="row footer-container">
            <div class="col-12">
                <a href="index.php"><img src="./images/MD_LOGO.png" alt="logo" class="logo-footer"></a>
                <p>Make Difference is a charitable organization in Turkey Gaziantep</p>
            </div>
        </div>

        <div class="row footer-container">

            <div class="col-4">
                <p class="upper-p">ADDRESS</p>
                <a href="https://goo.gl/maps/AKzZWbNwbedrpRHi7" target="_blank"><address>Havaalanı Yolu Üzeri 8. km, <br> 27010 Şahinbey/Gaziantep</address></a>
            </div>

            <div class="col-4">
                <p class="upper-p">CALL US</p>
                <p><a href="tel:+90 534 895 14 25" class="phone">+90 534 895 14 25</a></p>
                <p><a href="tel:+90 534 895 14 25">+90 534 895 14 25</a></p>
            </div>

            <div class="col-4">
                <p class="upper-p">FOLLOW US</p>
                <div class="social-media">
                    <a href="https://twitter.com/" target="_blank" class="icons twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" class="icons instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" class="icons facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/" class="icons youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a> 
                </div>
            </div>

        </div>
        <hr>
        <div class="row footer-container">
            <div class="col-6">
                <h3 class="footer-h3">&copy;2022 by Emre Dinleyici All Rights Reserved</h3>
            </div>

            <div class="col-6 footer-button">
                <a href="index.php" class="abutton">Home</a>
                <a href="contact-us-page.php" class="abutton">Contact-Us</a>
            </div>
        </div>
    </footer>
    
</body>
</html>
<?php 
    }

    $database = null;
    
?>