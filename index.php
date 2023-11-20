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
    <meta name="keywords" content="donate, donation, unused stuf, help people, donate unused stuf, make differnece">
    <meta name="description" content="This site was created for donating, how to donate, donating unused items and helping those in need.">
    <meta http-equiv="content-language" content="en">
    <meta name="Copyright" content="2022 by Emre Dinleyici All Rights Reserved">
    <title>Make Difference</title>
    <link rel="shortcut icon" href="./images/MD_LOGO.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/normalize.css" type="text/css"> 
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>    
        <div class="header-background">
            <div class="row">
                <div class="col-12 reset">
                    <h1 class="main-head">Make Difference</h1>
                </div>
            </div>
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
        </div>
    </header>


    <a class="to-up">UP</a>
    <a href="make-donation.php" class="donate"><i class="fa-solid fa-arrow-right"></i></a>


    <aside>
        <div class="row">
            <div class="col-12 reset">
                <div class="icon-bar">
                    <a href="https://twitter.com/" target="_blank" class="twit icon"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="insta icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/" target="_blank" class="face icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/" target="_blank" class="you icon"><i class="fa-brands fa-youtube"></i></a> 
                </div>
            </div>
        </div>
    </aside>


    <section id="general-main">
        <div class="row">
            <div class="col-12 content">
                <h2>What is Donation and Why is it Important?</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6 content">
                <p class="under-head">Unrequited aid provided to people in need through organizations such as <b><em> associations and foundations</em></b> can be defined as donations. Donations don't just make a difference in the life of an individual; they contribute to equal opportunities on a societal and even global scale. A small donation can support the fight against hunger or the treatment of sick children.</p>
                <p class="p-under">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim culpa molestias impedit possimus, voluptatem hic voluptatum aliquam sequi dignissimos explicabo harum animi dolore quasi eligendi dolorum porro totam sit vitae eum repudiandae, nesciunt optio. Quo doloribus architecto culpa asperiores suscipit quam, adipisci at, soluta qui fugiat quod. Eligendi pariatur cupiditate adipisci nisi eveniet earum sit illo laborum autem ipsa, dicta cumque excepturi itaque distinctio, laudantium facilis praesentium consequatur. Architecto velit repudiandae fuga enim qui saepe sint! Ipsam consectetur nobis pariatur nostrum asperiores illo expedita nihil praesentium nulla odio id reiciendis aspernatur, rem totam necessitatibus nesciunt exercitationem quasi amet deserunt non.</p>
            </div>

            <div class="col-6">
                <figure>
                    <img src="./images/donation.jpg" alt="donation" width="100%" height="auto">
                </figure>
            </div>
        </div>

        <div class="row">
            <div class="col-12 content">
                <h2>What Are the Benefits of Donating?</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-3 box">
                <h4>Donating brings happiness</h4>
                <p>The idea of doing something for the good of the world and people makes donors feel good. According to a 2014 study, the midbrain region associated with pleasure is activated in the brains of people who donate. In other words, the region that is activated when you eat chocolate is also active when you donate. In short, donating makes you happy.</p>
            </div>

            <div class="col-3 content box">
                <h4>Teaching generosity to children</h4>
                <p>If you have children, you can share your donation experience with them. This experience can give them the belief that they can make a positive change in the world from a young age. Children who see their parents as role models grow up to be more generous adults who are more likely to give and help others. By making giving a family tradition, you can teach your child the importance of sharing.</p>
            </div>
        </div>
    </section>



    <section id="section2">
        <div class="row">
            <div class="col-12 content">
                <h3>Don't Forget That Unused Items and Clothes In the Closet Make Someone Happy</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-6 content">
                <figure>
                    <img src="./images/kids.jpg" alt="kids" width="100%" height="auto">
                </figure>
            </div>

            <div class="col-6">
                <p class="under-head">Don't you want your unused items and clothes waiting for the closet to be useful and to please someone? There are many non-governmental organizations like us that will take your useless items and clothes and make use of them. They take second-hand goods from you and deliver them to those in need.</p> <br>
                <p class="p-under">The small amount of your donation does not prevent you from being a part of change. Because if you believe in <mark style="background-color: rgb(103, 103, 239);"><b>#BenefitNotAmount</b></mark> and make your donations regularly, you will see that you are part of a much bigger and sustainable change!  <br> <br><b>#MAKEDIFFERENCE</b></p> <br>
                <img src="./images/MD_LOGO.png" alt="logo" width="50%" height="auto">
            </div>

        </div>
    </section>
    

    <section id="slide">
        <div class="row">
            <div class="col-12 reset slide-back">
                <h5 class="content slide-head">You Can Donate Any Unused Stuff</h5>
                
                <div class="slideshow-container">
                
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 5</div>
                        <figure>
                            <img src="./images/make-change.jpg" alt="make-change picture" style="width:100%">
                        </figure>
                        <div class="text">Make a Difference</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 5</div>
                        <figure>
                            <img src="./images/clothes.jpg" alt="clothes-picture" style="width:100%">
                        </figure>
                        <div class="text">Clothes</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 5</div>
                        <figure>
                            <img src="./images/books.jpg" alt="books picture" style="width:100%">
                        </figure>
                        <div class="text">Books</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 5</div>
                        <figure>
                            <img src="./images/white-device.jpg" alt="electronic-devices-picture " style="width:100%">
                        </figure>
                        <div class="text">Any Electronic Device</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <figure>
                            <img src="./images/love-hands.jpg" style="width:100%">
                        </figure>
                        <div class="text">love Multiplies When Shared</div>
                    </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>
            </div>
        </div>
    </section>


    <section id="section3">
        <div class="row">
            <div class="col-12 content">
                <h5>HOW SHOULD YOU DONATE?</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-6 content">
                <figure>
                    <img src="./images/steps.png" alt="steps-picture" width="100%" height="auto">
                </figure>
            </div>

            <div class="col-6">
                <ul>
                    <li>Second-hand donations should be delivered directly to the Foundation address if you are not delivering them yourself.</li>
                    <li>Electrical equipment and white goods must be in working order and clean.</li>
                    <li>Donated clothes and books must be clean and torn.</li>
                    <li>You can donate all kinds of things. Pillows, quilts, tulle, blankets, tablecloths, plates, dishes, VCDs, computers - anything you can think of can be useful for someone else.</li>
                    <li>Always pack the items you will give. Or if you are going to deliver them directly, put them in a suitable package. Never take them in a disorganized state.</li>
                </ul>
            </div>
        </div>
    </section>


    <section id="what-done">
        <div class="row">
            <div class="col-6 content">
                <h2 class="what-head">What Have We Done So Far?</h2>
                <p class="under-head">The aim of the MD Foundation of Turkey is to ensure the donation of unused items in the society, to create awareness and to deliver them to people in need. <br> <br> To date, we have made 541.785 donations in 81 cities. <br> <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos tenetur iure molestias iste quaerat magnam nam. Obcaecati vitae optio fuga laborum necessitatibus quia dignissimos, quidem voluptatibus magnam quis nisi recusandae in impedit nostrum quasi pariatur unde dolore itaque aliquid nam? Consequuntur ea, ad inventore minima quo sapiente explicabo voluptatem rerum.</p>
            </div>

            <div class="col-3">
                <figure>
                    <img src="./images/donate-count.svg" alt="donation-count" height="auto" width="100%">
                </figure>
                <div class="under">
                    <p>541.785 Donate</p>
                </div>
            </div>

            <div class="col-3">
                <figure>
                    <img src="./images/city-count.svg" alt="city-count" height="auto" width="100%">
                </figure>
                <div class="under">
                    <p>81 City</p>
                </div>
            </div>
        </div>
    </section>


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
                <p><a href="tel:+90 525 785 41 25">+90 534 895 14 25</a></p>
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


    <script src="./javascript/jquery.js" type="text/javascript"></script>
    <script src="./javascript/to-up and donate.js" type="text/javascript"></script>
    <script src="./javascript/slide.js" type="text/javascript"></script>
    
</body>
</html>

<?php
    $database = null;
?>