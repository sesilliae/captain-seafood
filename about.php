<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Captain Seafood</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <!--navbar-->
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Captain Seafood</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


    <!--content-->
    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <h2 style="text-align:center;">About</h2><hr>
        <p><b>CAPTAIN SEAFOOD</b> adalah aplikasi penjualan komoditas hasil laut yang berkerja sama dengan mitra-mitra yang menaungi nelayan-nelayan Indonesia. 
        Aplikasi ini dibuat untuk tujuan meningkatkan kesejahteraan dan derajat profesi nelayan di Indonesia, membangun kemitraan yang berkompeten, sehat dan 
        kuat dalam mendistribusikan produk ikan laut segar dan aktivitas value creation kepada konsumen akhir, dan menciptakan nilai konsumsi hasil laut yang
        lebih tinggi di Indonesia.</p>

        <p>Mengapa harus membeli di <b>CAPTAIN SEAFOOD</b>? karena disini kami menjual komoditi dalam kondisi yang segar dan menjual dengan harga yang bermasyarakat 
        dengan tujuan agar semua kelas di masyarakat dapat menikmati hasil jualan kami.</p> 
        <br><br><br><br><br><br><br><br><br><br>


    <!--Footer-->
      <footer>
        <p style="text-align:center; font-size:0.8em;">&copy; Captain Seafood. All Rights Reserved.</p>
      </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
