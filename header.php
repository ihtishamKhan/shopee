<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopee</title>

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
  <!-- OwlCarousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

  <!-- Fontawsome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

  <?php
    //require functions.php file
    require('functions.php');
    
  ?>
</head>
<body>
   
  <!-- start header -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit 4400 +92 334 12390897</p>
      <div class="font-rale font-size-14">
          <a href="#" class="px-3 border-right border-left text-dark">Login</a>
          <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
      </div>
    </div>

    <!-- Primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">Shopee</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item active">
              <a class="nav-link" href="#">On Sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Coming Soon</a>
            </li>
          </ul>
          <form action="#" class="font-size-14 font-rale">
            <a href="cart.php" class="py-2 rounded-pill color-primary-bg" style="border-radius: 16px;">
              <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
              <span class="px-3 py-2 rounded-pill text-dark bg-light" style="border-radius: 16px;"><?php echo count($product->getData('cart')); ?></span>
            </a>
          </form>
        </div>
      </nav>
    <!-- !Primary Navigation -->
  </header>
  <!-- !start header -->

  <!-- start main -->
  <main id="main-site">