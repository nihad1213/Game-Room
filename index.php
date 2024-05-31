<?php include_once('config/connection.php'); ?>
<?php 
   $dataBase = new Database;
   $pdo = $dataBase->connect();
?>
<?php 
   ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Boostrap links start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <head src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <!--Bootstrap links end-->
    
   <!--Font Awesome link starts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--Font Awesome link ends-->

   <!--Favicon link start-->
    <link rel="shortcut icon" href="assets/logos/fav.png" type="image/x-icon">
   <!--Favicon link ends-->

   <!--CSS link starts-->
    <link rel="stylesheet" href="assets/style/style.css" type="text/css">
   <!--CSS link ends-->

   <!--Arcade font link starts-->
    <link href="https://fonts.cdnfonts.com/css/arcade-classic" rel="stylesheet"> 
   <!--Arcade font link ends-->

   <!--Google Font Press Start 2P font link starts-->
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
   <!--Google Font Press Start 2P font link ends-->
   <title>Game Room</title>
</head>
<body>

<header>
        <div class="header-first">
            <nav class="row">
                <a href="index.php" class="col-8 logo">
                    <img src="assets/logos/logo2.png" alt="logo">
                </a>
                <a href="partials/sell-video-games.php" class="col-2 nav-item"><strong>Sell Video Games</strong></a>
                <a href="#" class="col-1 nav-item"><strong><i class="fa-solid fa-user"></i></strong></a>
                <a href="#" class="col-1 nav-item"><strong><i class="fa-solid fa-cart-shopping"></i></strong><i></a>
            </nav>
        </div>

        <div class="header-second">
            <div class="companies">
               <ul>
                  <li class="comp-name">
                     <a  href="partials/sony.php">Sony </a>
                     <ul class="dropdown">
                        <li><a href="#">Playstation 1 </a></li>
                        <li><a href="#">Playstation 2</a></li>
                        <li><a href="#">Playstation 3</a></li>
                        <li><a href="#">PSP</a></li>
                        <li><a href="#">PS Vita</a></li>
                     </ul>
                  </li>
               </ul>

               <ul>
                  <li class="comp-name">
                     <a href="#">Nintendo</a>
                     <ul class="dropdown">
                        <li><a href="#">NES</a></li>
                        <li><a href="#">SNES</a></li>
                        <li><a href="#">Game Boy</a></li>
                        <li><a href="#">Nintendo 64</a></li>
                        <li><a href="#">Game Cube</a></li>
                        <li><a href="#">Wii</a></li>
                        <li><a href="#">Wii U</a></li>
                     </ul>
                  </li>
               </ul>

               <ul>
                  <li class="comp-name">
                     <a href="#">Sega</a>
                     <ul class="dropdown">
                        <li><a href="#">Genesis</a></li>
                        <li><a href="#">Dreamcast</a></li>
                        <li><a href="#">32X</a></li>
                        <li><a href="#">Saturn</a></li>
                        <li><a href="#">Game Gear</a></li>
                        <li><a href="#">Master System</a></li>
                     </ul>
                  </li>
               </ul>

               <ul>
                  <li class="comp-name">
                     <a href="#">Xbox</a>
                     <ul class="dropdown">
                        <li><a href="#">Xbox</a></li>
                        <li><a href="#">Xbox 360</a></li>
                        <li><a href="#">Xbox One</a></li>
                     </ul>
                  </li>
               </ul>

               <ul>
                  <li class="comp-name">
                     <a href="#">Other Stuff</a>
                     <ul class="dropdown">
                        <li><a href="#">T-Shirt</a></li>
                        <li><a href="#">Atari</a></li>
                        <li><a href="#">Plug-n-Play</a></li>
                        <li><a href="#">Turbo Grafx</a></li>
                        <li><a href="#">Users Sales</a></li>
                     </ul>
                  </li>
               </ul>
            </div>

            <div class="search">
               <form action="#">
                  <input type="text" placeholder="Search in Store...">
                  <button type="submit"><i class="fa fa-search"></i></button>
               </form>
            </div>
        </div>
   </header>

   <main>
      <div class="main-total container">
         <div class="main-image col-6">
            <img src="assets/main/main.jpg" alt="main-image">
         </div>

         <div class="main-text col-6">
            <div class="header">
               <h3>GameRoom is True Old School Game Store!</h3>
            </div>

            <div class="main-paragraph">
               <p>
                  Buy used video games, original game systems and old school gaming accessories at the largest family run retro video game online store. Shop all our vintage authentic products, with a free 1 year warranty and free domestic shipping on orders over $10!
               </p>
            </div>
         </div>
      </div>

      <div class="become-subscriber">
         <div class="subscriber-header">
            <h2>Get Game Deals</h2>
         </div>

         <div class="subscriber-paragraph">
            <p>
               Signup to get <strong >EXCLUSIVE</strong> deals and coupons on all your favorite old video games and classic game consoles!
            </p>
         </div>

         <div class="subsriber-input">
            <form method="POST">
               <span>
                  <i class="fa-solid fa-envelope"></i>
               </span>
               <input type="email" name="email" placeholder="Enter your Mail">
               <button type="submit" name="submit"><i class="fa-brands fa-telegram"></i></button>
            </form>
         </div>

         <?php
            if (isset($_POST['submit'])) {
               $email = $_POST['email'];
               
               $sql = $pdo->prepare("INSERT INTO subscribers (subscriberMail) VALUES (:email)");
               $sql->bindParam(':email', $email);
               if ($sql->execute()){
                  header('Location: index.php');
                  exit();
               } else {
                  #ERROR
               }
            }
         ?>
      </div>
   </main>
   
   <footer>   
      <div class="footer-image">
         <img src="assets/logos/logo2.png" alt="logo">
      </div>
      
      <div class="footer-total">
         <div class="footer-store">
            <div class="footer-headers">
               <h4>GR Store</h4>
            </div>
            
            <div class="footer-links">
               <a href="partials/about-us.php">About Us</a>
               <a href="partials/repair-center.php">Repair Center</a>
               <a href="partials/deals.php">Deals and Coupons</a>
            </div>
         </div>

         <div class="footer-company">
            <div class="footer-headers">
               <h4>Company</h4>
            </div>

            <div class="footer-links">
               <a href="partials/shipping.php">Shipping & Return</a>
               <a href="partials/refurbish.php">Refurbish & Inspection Process</a>
               <a href="partials/contact-us.php">Contact Us</a>
               <a href="partials/privacy.php">Privacy</a>
               <a href="partials/faq.php">FAQs</a>
            </div>
         </div>

         <div class="footer-account">
            <div class="footer-headers">
               <h4>Account</h4>
            </div>

            <div class="footer-links">
               <a href="partials/terms.php">Terms and Conditions</a>
               <a href="partials/secure.php">Secure Shopping</a>
            </div>
         </div>

         <div class="footer-account">
            <div class="footer-headers">
               <h4>Get Social</h4>
            </div>

            <div class="footer-links">
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-instagram"></i></a>
               <a href="#"><i class="fa-brands fa-youtube"></i></a>
               <a href="https://github.com/nihad1213" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
         </div>
      </div>
      
      <div class="footer-copyright">
         <p><strong>GameRoom.com</strong>© Created by Nihad Namatli <?php echo date("Y"); ?></p>
      </div>
   </footer>
</body>
</html>