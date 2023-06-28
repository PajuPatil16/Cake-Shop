<?php 
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
?>

<!DOCTYPE html>
<html lang="en-MU">
    <head>
        <meta charset="utf-8">
        <title>MALAKO | MAKE YOUR CAKE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS File-->
        <link rel="stylesheet" type="text/css" href="Common.css">
        <link rel="stylesheet" type="text/css" href="Atish.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
        <!--BOXICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- Animate CSS -->
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>

    <style>
        /* General styling */
        * {
        box-sizing: border-box;
        }

        body {
        font-family: Arial, sans-serif;
        background: 	#00BFFF;
        }

        h1 {
        text-align: center;
        }

        form {
        width: 80%;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 30px;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
        }
        input{
            margin-top: 10px;
        }
        input[type="text"] {
        color: black;
        }
        .sub{
            background: #FF7380FF;
        }
        input[type="color"] {
        width: 100%;
        height: 40px;
        padding: 5px;
        border-radius: 5px;
        border: none;
        margin-bottom: 40px;
        }

        button {
        color: black;
        }

        button {
        display: block;
        margin: auto;
        margin-top: 5px;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        background-color: #FF7380FF;
        color: black;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        }

        /* Styling for cake design preview */
        .preview {
        width: 80%;
        margin: 40px auto;
        }

        .cake {
        width: 300px;
        height: 400px;
        background-color: #FFF1E0;
        border: 10px solid #E6B873;
        border-radius: 50% / 20%;

        position: relative;
        }

        .layer1 {
        width: 100%;
        height: 30%;
        background-color: <?php echo $_POST['layer1']; ?>;
        position: absolute;
        bottom: 70%;
        }

        .layer2 {
        width: 100%;
        height: 30%;
        background-color: <?php echo $_POST['layer2']; ?>;
        position: absolute;
        bottom: 40%;
        }

        .layer3 {
        width: 100%;
        height: 30%;
        background-color: <?php echo $_POST['layer3']; ?>;
        position: absolute;
        bottom: 10%;
        }

        .top {
        width: 60%;
        height: 20%;
        background-color: <?php echo $_POST['topColor']; ?>;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        border-top: 10px solid #E6B873;
        border-radius: 50% / 50%;
        }

        .border {
        width: 65%;
        height: 100%;
        border: 10px solid <?php echo $_POST['borderColor']; ?>;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50% / 20%;
        }

        .sprinkle {
        width: 10px;
        height: 10px;
        background-color: <?php echo $_POST['sprinkleColor']; ?>;
        border-radius: 50%;
        position: absolute;
        }

        .flip-horizontal {
            transform: scaleX(-1);
        }

        /* Randomly position sprinkles using PHP */
        <?php
        for ($i = 0; $i < 100; $i++) {
            $x = rand(0, 100);
            $y = rand(0, 100);
            echo ".sprinkle$i { top: $x%; left: $y%; }";
        }
        ?>
    </style>

    <body>
        <?php $page = 'makeCake';?>

        <!--Start Navigation Bar-->
        <?php include './Includes/MobileNavBar.php';?>
        <!--End Navigation Bar-->


        <!--Start Navigation Bar @media 1200px-->
        <?php include './Includes/PcNavBar.php';?>
        <!--End Navigation Bar @media 1200px-->

        
        <!--Start Wave Image-->
        <div class="wave-image-group">
            <div class="wave-image footer-wave" class="flip-horizontal">
                <img src="Assets/images/1.index/NavBar_WaveWhiteThinFlip.png">
            </div>
        </div>
        <!--End Wave Image-->
        <!-- <h1>Make Your Own cake Design</h1> -->

      

        <form action="makeCake.php" method="post">
        <h1>Make Your Own cake Design</h1>
            <label for="layer1">Layer 1 Color:</label>
            <input type="color" name="layer1" id="layer1" placeholder="Enter a color" required>

            <label for="layer2">Layer 2 Color:</label>
            <input type="color" name="layer2" id="layer2" placeholder="Enter a color" required>

            <label for="layer3">Layer 3 Color:</label>
            <input type="color" name="layer3" id="layer3" placeholder="Enter a color" required>

            <label for="topColor">Top Color:</label>
            <input type="color" name="topColor" id="topColor" placeholder="Enter a color" required>

            <label for="borderColor">Border Color:</label>
            <input type="color" name="borderColor" id="borderColor" placeholder="Enter a color" required>

            <label for="sprinkleColor">Sprinkle Color:</label>
            <input type="color" name="sprinkleColor" id="sprinkleColor" placeholder="Enter a color" required>

            <input type="submit" value="Submit" class="sub">
        </form>

        <!--Start Footer-->
        <footer class="footer-group">

            <div class="footer">

                <div class="logo">
                    <span class="logo-name">MALAKO</span>
                </div>
            
                <div class="social-media">
                    <span class="facebook">
                        <a href=#><i class="fab fa-facebook-square"></i></a>
                    </span>
                    <span class="twitter">
                        <a href=#><i class="fab fa-twitter-square"></i></a>
                    </span>
                    <span class="instagram">
                        <a href=#><i class="fab fa-instagram-square"></i></a>
                    </span>
                    <span class="pinterest">
                        <a href=#><i class="fab fa-pinterest-square"></i></a>
                    </span>
                </div>

                <hr size="2px" width="80%" color="white">
                <hr size="2px" width="80%" color="white">

                <div class="contact-links">
                <span class="phone"><i class="fas fa-phone-square-alt"></i> 02376578987</span>
            <span class="address">Mahadvar Road, near Babuji mall,Kolhapur</span>
                </div>

                <div class="legal-links">
                    <span class="privacy-policy"><b><a href=#>PRIVACY POLICY</a></b></span>
                    <span class="term-of-use"><b><a href=#>TERMS OF USE</a></b></span>
                </div>

                <div class="copyright">
                    <span class="copyright-text">&#169; 2020 Design by APOP</span>
                </div>

            </div>  

        </footer>
        <!--End Footer-->

        
        <!-- Start Bottom Nav -->
        <div class="bottom-nav-group">
            <nav class="bottom-nav">
                <a href="login.html" class="bottom-nav-link">
                    <i class="fas fa-user bottom-nav-icon" ></i>
                    <span class="bottom-nav-text">Account</span>
                </a>
                <a href="#" class="bottom-nav-link">
                    <i class="fas fa-search"></i>
                    <span class="bottom-nav-text">Search</span>
                </a>
                <a href="#" class="bottom-nav-link">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="bottom-nav-text">My Cart</span>
                </a> 
            </nav>
        </div>
        <!-- End Bottom Nav -->
    </body>
</html>