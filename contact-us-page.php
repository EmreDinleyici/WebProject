<?php
    require("./php/config.php");
    // echo $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Emre Dinleyici, emre.dinleyici@std.hku.edu.tr">
    <meta name="keywords" content="address, phone, mail, contact, contact-us, message, message-us">
    <meta name="description" content="You can find our address, phone, mail and message form for sending message to us">
    <meta http-equiv="content-language" content="en">
    <meta name="Copyright" content="2022 by Emre Dinleyici All Rights Reserved">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="./images/MD_LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/contact-us.css">
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
        <?php if (isset($_SESSION["user"])) { ?>
            <div class="col-6 reset">
                <a href="./php/sign-out.php"><button class="log">Sign-Out</button></a>
                <a><button class="log"><?php echo $_SESSION["user"];?></button></a>
            </div>
        <?php }else{?>
            <div class="col-6 reset">
                <a href="sign-in.html"><button class="log">Sign-In</button></a>
                <a href="sign-up.html"><button class="log">Sign-Up</button></a>
            </div>
        <?php }?>
    </nav>



    <section id="first-section">
        <div class="row">
            <div class="col-12">
                <h1>GET IN TOUCH</h1>
            </div>
        </div>

        <div class="row container">
            <div class="col-4">
                <a href="#map" class="icon location"><i class="fa-solid fa-location-dot"></i></a>
                <p>ADDRESS</p>
                <p>Visit US: </p>
                <address><a href="#map">Havaalanı Yolu Üzeri 8. km, <br> 27010 Şahinbey/Gaziantep</a></address>
                
            </div>

            <div class="col-4">
               <a href="tel:+90 525 785 41 25" class="icon phone"><i class="fa-solid fa-phone"></i></a> 
               <p>PHONE</p>
               <p>Lorem ipsum, dolor sit amet consectetur <br> adipisicing elit. Distinctio, nulla.</p>
               <p><a href="tel:+90 525 785 41 25">+90 525 785 41 25</a></p>
               <p>Lorem ipsum, dolor sit amet consectetur <br> adipisicing elit. Distinctio, nulla.</p>
               <p><a href="tel:+90 534 895 14 25">+90 534 895 14 25</a></p>
            </div>

            <div class="col-4">
                <a href="mailto:makedifference@gmail.com" class="icon mail"><i class="fa-solid fa-envelope"></i></a>
                <p>EMAIL</p>
                <p>Online Support: <br> </p>
                <a href="mailto:makedifference@gmail.com">makedifference@gmail.com <br> <br></a>
                <p>Lorem, ipsum dolor sit amet consectetur <br> adipisicing elit. Modi, incidunt: </p>
                <a href="mailto:makedifference@gmail.com">differencemake@gmail.com <br> <br></a>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2>Follow Us</h2>
                    <div class="social-media">
                        <a href="https://twitter.com/" class="icons twitter" target = "_blank"><i class="fa-brands fa-twitter" id="icons"></i></a>
                        <a href="https://www.instagram.com/" class="icons instagram" target = "_blank"><i class="fa-brands fa-instagram" id="icons"></i></a>
                        <a href="https://www.facebook.com/" class="icons facebook" target = "_blank"><i class="fa-brands fa-facebook" id="icons"></i></a>
                        <a href="https://www.youtube.com/" class="icons youtube" target = "_blank"><i class="fa-brands fa-youtube" id="icons"></i></a> 
                    </div>
                </div>
            </div>

        </div>
    </section>

    
    <div class="map-location">
        <div class="row">
            <div class="col-12">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.114882191827!2d37.43449211529573!3d37.007055579906506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e7bb4eb570a1%3A0x7b3c32754b83a6a9!2sHasan%20Kalyoncu%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1671091203575!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <section id="second-section">
        <div class="row">
            <div class="col-6">
                <h3>Message Us</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam sint recusandae adipisci tempore sapiente. Fuga architecto voluptatem aliquam odit! Accusamus ab neque error vitae, voluptatum sequi, ipsum veniam porro, voluptate dicta magnam? Asperiores totam omnis minus ea. Molestiae dicta magni commodi quis in debitis esse odit tenetur perferendis quas nam modi numquam, suscipit veritatis soluta sequi facere cumque. Culpa facere esse neque fugit, assumenda dignissimos qui reprehenderit, expedita consequuntur quasi, cupiditate minima hic cum provident officia et soluta facilis distinctio? Necessitatibus, assumenda!</p>
                <img src="./images/BBB.png" alt="BBB torch awards" class="section-pic">
            </div>

            <div class="col-6">
                <form action="./php/contact-us.php" method="post" autocomplete="off">
                    <label for="name">Name:</label>                    
                    <input type="text" placeholder="Name" name="name" id="name" required>

                    <label for="surname">Surname:</label>
                    <input type="text" placeholder="Surname" name="surname" id="surname" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone" class="input" placeholder="(###) ###-####" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>

                    <label for="message">Your message:</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here your message..." required></textarea>

                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>
    </section>


    <footer>
        <div class="row">
            <div class="col-12">
                <h3>&copy;2022 by Emre Dinleyici All Rights Reserved</h3>
            </div>
        </div>
    </footer>
    
</body>
</html>

<?php
    $database = null;
?>