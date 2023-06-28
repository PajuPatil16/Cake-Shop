<?php 
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cake Design</title>
    <!--CSS File-->
    <link rel="stylesheet" type="text/css" href="Common.css">
        <link rel="stylesheet" type="text/css" href="Atish.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
        <!--BOXICONS-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- Animate CSS -->
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      /* CSS for cake design */
        /* body {
        background-image: url('Assets/images/makec.jpg');
        background-size: 100%;
        background: margin-top="300px";
        background-position: relative;
        background-repeat: no-repeat;
        } */


        .image-container {
        background-image: url('path/to/your/image.jpg');
        background-size: 100%;
        position: absolute;
        margin: 20px;
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
        border-radius: 50%;
        bottom: 70%;
      }

      .layer2 {
        width: 100%;
        height: 30%;
        background-color: <?php echo $_POST['layer2']; ?>;
        border-radius: -50%;
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

      /* Randomly position sprinkles using PHP */
      <?php
        for ($i = 0; $i < 100; $i++) {
          $x = rand(0, 20);
          $y = rand(0, 90);
          echo ".sprinkle$i { top: $x%; left: $y%; }";
        }
      ?>
        input[name="po"] {
        background-color: #008CBA;
        border: none;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 40px 2px;
        cursor: pointer;
        border-radius: 4px;
        }
        
    </style>
    
  </head>
  <body>
    <?php $page = 'makeCake';?>

    <!--Start Navigation Bar-->
    <?php include './Includes/MobileNavBar.php';?>
    <!--End Navigation Bar-->


    <!--Start Navigation Bar @media 1200px-->
    <?php include './Includes/PcNavBar.php';?>
    <!--End Navigation Bar @media 1200px-->


    <!--Start Wave Image-->
    <!-- <div class="wave-image-group">
        <div class="wave-image footer-wave" class="flip-horizontal">
            <img src="Assets/images/1.index/NavBar_WaveWhiteThinFlip.png">
        </div>
    </div> -->
    <!--End Wave Image-->

    

    <!-- <h1>Make Your Own cake Design</h1> -->

    <span><strong><h2 style="font-size: 2em; font-weight: bold; text-align: center; color: #333;">Cake Design</h2></strong></span>
    <center>
    <div class="cake">
      <div class="layer1"></div>
      <div class="layer2"></div>
      <div class="layer3"></div>
      <div class="top"></div>
      <div class="border"></div>
      <?php
        // Generate random sprinkles using PHP
        for ($i = 0; $i < 100; $i++) {
          echo "<div class='sprinkle sprinkle$i'></div>";
        }
      ?>
    </div>
    </center>
    <form action="products.php">
      <input type="submit" name="po" value="Place order">
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



