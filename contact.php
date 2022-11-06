<?php
    require("./php/config.php");
    $sqlimages = mysqli_query($db,"SELECT * FROM gallery WHERE tsa_createo='tsa' LIMIT 4");
    $sqlimages1 = mysqli_query($db,"SELECT * FROM gallery WHERE tsa_createo='tsa' LIMIT 4");
    $sqlposts = mysqli_query($db,"SELECT * FROM events WHERE tsa_createo='tsa' LIMIT 4");
    $sqlposts1 = mysqli_query($db,"SELECT * FROM events WHERE tsa_createo='tsa' LIMIT 4");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Think Speak Act || Contact </title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>    
    
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Nav Bar -->
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="./index.php"><img src="./images/l1_logo.png" alt="Logo"></a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a class="active" href="gallery.php">Gallery</a></li>
                    <li><a href="contests.php">Contests</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <a href="../createo/index.php" class="dark-light">
                    <img src="./images/logo22.png" alt="">
                </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="sets">
        <div class="containerc">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">32-2-35, nathayyaplem,  </div>
                        <div class="text-two">B. H. P. V post</div>
                        <div class="text-two"> visakhapatnam-530012</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+91 9505908285</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">thinkspeakact.tsa@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of quries, you can send me message from here. It's my pleasure to help you.</p>
                    <form class="form">
                        <div class="msg error"></div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name" name="name">
                        </div>
                        <div class="input-box">
                            <input type="email" placeholder="Enter your email" name="email">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your Phone Number" name="phone">
                        </div>
                        <div class="input-box message-box">
                            <textarea name="msg" placeholder="Enter your message..."></textarea>
                        </div>
                        <div class="button">
                            <input type="submit" value="Send Now" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="./index.php#about">about us</a></li>
                        <li><a href="./contests.php">our contests</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Pages</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="./gallery.php">gallery</a></li>
                        <li><a href="./contests.php">contests</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>createo</h4>
                    <ul>
                        <li><a href="../createo">Gallery</a></li>
                        <li><a href="../createo">Contests</a></li>
                        <li><a href="../createo">classes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class='bx bxl-facebook' ></i></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-youtube' ></i></a>
                        <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./js/main.js"></script>
    <script src="./js/contact.js"></script>
</body>
</html>