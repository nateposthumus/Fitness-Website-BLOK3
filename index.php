<!-- http://localhost:8080/phpmyadmin -->

<?php
$title = "Fitness | blok3";
 
require "database_connection.php";
 
// selecteer alle data uit de fitnesslessen tabel
$query = "SELECT * FROM `fitnesslessen`";
$result = mysqli_query($conn, $query); 
$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $title ?></title>
</head>

<body>

    <nav>
        <div class="nav-logo">
            <a href="#">
                <img src="images/logo.png">
            </a>
        </div>

        <ul class="nav-links">
        <li class="link"><a href="index.php">HOME</a></li>
            <li id="link1" class="link"><a href="lessen.php">LESSEN</a></li>
            <li id="link2" class="link"><a href="prijzen.php">PRIJZEN</a></li>
            <li id="link3" class="link"><a href="over_ons.php">OVER ONS</a></li>
        </ul>
        <button class="btn">Contact Opnemen</button>
    </nav>

    <header class="container">
        <div class="content">
            <h4>Train Als Een Pro.</h4>
            <H1>Welkom Bij <span>TRAIN HARD</span>, Fitness Club</H1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus rem eos aliquid quo rerum
                temporibus ipsum distinctio numquam ut omnis placeat, nam sint atque quos dolorem laborum? Rerum, esse
                dolorem.
            </p>
            <button class="btn" id="link1">Aan De Slag!</button>
        </div>
        <div class="image">
            <img src="images/header.png">
        </div>
    </header>

    

    

    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="socials">
                <a href="#"><i class="ri-youtube-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>Company</h4>
            <a href="#">Business</a>
            <a href="#">Partnership</a>
            <a href="#">Network</a>
        </div>
        <div class="column">
            <h4>About Us</h4>
            <a href="#">Blogs</a>
            <a href="#">Channels</a>
            <a href="#">Sponsors</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="#">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
    </footer>

    <div class="copyright">
        Copyright © 2025 Train Hard | Fitness Blok3. All Rights Reserved.
    </div>


    <script src="script.js"></script>
</body>

</html>

