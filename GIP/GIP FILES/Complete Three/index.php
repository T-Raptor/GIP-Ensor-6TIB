<?php require('config.php'); ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Struggle Clothing</title>

    <!-- External Stylesheet -->
    <link href="style.css" rel="stylesheet" />

    <!-- Bootstrap CDN ------- ( To make the page responsive. ) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts ------- ( To add the fonts used. ) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    
    <!-- Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script> 

</head>
<body>
<div class="wrapper">
        
      <!-- ------- Start Navigation Bar ------- -->
      <?php require(SITE_DIR.'/Includes/navbar.php'); ?>
      <!-- ------- End Navigation Bar ------- -->


      <!-- ------- Start Hero Section ------- -->
      <div class="hero">
            <div class="header">
                  <h1 class="line anim-typewriter">The STRUGGLE is real.</h1>
            </div>
      </div>

      <div class="scroll-down"></div>
      <!-- ------- End Hero Section ------- -->

      <div class="container">
            <br><br>

            <div class="collab">
                  <div class="row">
                        <div class="col-lg-12">
                              <p>These are our most sold products.</p>
                        </div>
                  </div>
            </div>
            <!-- ------- start Top Product List ------- -->
            <div class="section product-list">
                  <div class="container-fluid">
                        <div class="row some-cards">
                              <div class="col-lg-3 product">
                                    <a href="Pages/specific.php">
                                          <p id="price">EUR 20.00</p>
                                          <img src="Images/Shirt/StruggleShirtBlackFold.jpg" alt="">
                                          <p id="product-desc">Black Nera</p>
                                    </a>
                              </div>
                              <div class="col-lg-3 product">
                                    <a href="Pages/specific.php">
                                          <p id="price">EUR 20.00</p>
                                          <img src="Images/Shirt/StruggleShirtPinkFold.jpg" alt="">
                                          <p id="product-desc">Pink Nera</p>
                                    </a>
                              </div>
                              <div class="col-lg-3 product">
                                    <a href="Pages/specific.php">
                                          <p id="price">EUR 20.00</p>
                                          <img src="Images/Shirt/StruggleShirtBlackFold.jpg" alt="">
                                          <p id="product-desc">Black Nera</p>
                                    </a>
                              </div>
                              <div class="col-lg-3 product">
                                    <a href="Pages/specific.php">
                                          <p id="price">EUR 20.00</p>
                                          <img src="Images/Shirt/StruggleShirtPinkFold.jpg" alt="">
                                          <p id="product-desc">Pink Nera</p>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- ------- End Top Product List ------- -->

            <!-- ------- Start Learn More ------- -->
            
            <div class="container-fluid">
                  <div class="row section shop">
                        <div class="col-lg-8">
                              <p>This website is made by Lars Ostyn, Ares Popal and Alec Gheeraert from 6th grade informatics. All footage is owned by Milan Vermeersch.</p>

                              <div class="link learn">
                                    <a href="index.php">learn more</a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>


      <!-- ------- End Learn More ------- -->

      <!-- ------- Start Footer ------- -->

      <?php require(SITE_DIR.'/Includes/footer.php'); ?>

      <!-- ------- End Footer ------- -->


</div>

</body>
</html>