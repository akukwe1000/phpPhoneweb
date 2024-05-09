<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile shpee</title>

        <!-- boot starp cdn  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <!-- owl carousel cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
                <!-- font awsome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!-- custom css file -->
    <link rel="stylesheet" href="./style.css">

<!-- require function.php  -->
<?php require ('functions.php');   ?>
 



</head>
<body>
    <!-- start header  -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="fontRale fontsize12 text-black-50 m-0">jordan calderon 430-985 washinton</p>
            <div class="fontRale fontsize14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right  text-dark">whishlist (0)</a> 
            </div>
        </div>
        <!-- primary nav bar navigation  -->
        <nav class="navbar navbar-expand-lg navbar-dark colorSecondaryBg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Mobile Shopee</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto fontRubik">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fa-solid fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fa-solid fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Comming soon</a>
                  </li>
                  
                </ul>
                <form action="#" class="fontsize14 fontRale">
                   <a href="cart.php" class="py-2 rounded-pill colorPrimaryBg">
                       <span class="fontSize16 px-2 text-white"><i class="fa-solid fa-cart-shopping"></i></span>
                       <!-- <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span> -->
                       <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                   </a>
                </form>

              </div>
            </div>
          </nav>
    </header>
    <!-- stop header  -->

    <!-- start main site  -->
    <main id="mainSite">