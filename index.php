<?php include 'admin/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Asale|Home</title>
		<meta name="description" content="asale tour">
		<meta name="keywords" content="">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="text/css" href="assets/images/index.jpeg">

	</head>
	<body>
  

    <?php include 'includes/header.php'; ?>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/camels.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Explore Ethiopia With Us</h2>
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
              <a href="topplace.php" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">See Top Places</a> 
            </p>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    <!-- END section -->


    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Top Places Around Afar</h2>
          </div>
        </div>
        <div class="row">
          <?php
                                   $sql=mysqli_query($conn, "select * from post");
                                   while ($row=mysqli_fetch_array($sql)) {
                                    ?>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="#" class="probootstrap-thumbnail">
              <img src="admin/images/<?php echo $row['image'];?>" alt="asale tour and travel" class="img-fluid" >
              <div class="probootstrap-text">
                <h3><?php echo $row['title'];?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    
  

    <section class="probootstrap_section">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our Services</h2>
          </div>
        </div>
      </div>
    </section>
        

    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/camels.jpg)"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">Customer Service</h2>
          <p>We Provide a tour service for foreign tourists from USA, Europe, Asia, Africa and the globe at most and give a high standard tour service in Ethiopia</p>
          <p>Aslea Tour and Travel will make your stay wherever you may be as convient as possible.We Have very good network system we can boast of whereby we can get you the best palce deal even at the most difficult and critical time of your trip.</p>
          <p><a href="service.php" class="btn btn-primary">Read More</a></p>
        </div>
      </div>
    </section>


    <section class="probootstrap-section-half d-md-flex">
      <div class="probootstrap-image order-2 probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/erta2.jpg)"></div>
      <div class="probootstrap-text order-1">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInLeft">
          <h2 class="heading mb-4">Travel Desk</h2>
          <p>Aslea Tour and Travel will make your stay wherever you may be as convient as possible.We Have very good network system we can boast of whereby we can get you the best palce deal even at the most difficult and critical time of your trip.</p>
          <p><a href="service.php" class="btn btn-primary">Learn More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">More Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/afar2.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">01. Travel Desk</h5>
                <p>Our Travel desk is staffed with certified, exprianced and motivated Travlvel arrangements.When using our travel desk, you can be sure. </p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/afar3.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">02. InBound Tour</h5>
                <p>We Provide a tour service for foreign tourists all over the world and give a high standard service in Ethiopia. </p>
              </div>
            </div>

          </div>
          <div class="col-md-6">
            
            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/afar4.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">03. OutBound Tour</h5>
                <p>Aslea tour and travle is Prestigious in giving the service of bringing Ethiopia nationals or foreigners to different tourist sites of the world both in group and individually with high professional expertise. </p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/images.jpeg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">04.Tour Service</h5>
                <p>We Provide a tour service for foreign tourists from USA, Europe, Asia, Africa and the globe at most and give a high standard tour service in Ethiopia. </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our History</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>Asale Tour and Travel is an Ethiopian Company its located on afar region, Semera city that provides safaries and travel related services through out East Africa.We are dedicated to Service excellence, providing undivided attention of our clients.</em></p>
              
            </blockquote>

          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our Mission</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>To Promote tourism in Ethiopia & Africa and provide tourists from all corners of the world diversified tour and travel products and Services through our agency.</em></p>
              
            </blockquote>

          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Our Goal</h2>
            <blockquote class="">
              <p class="lead mb-4"><em>To Satisfy our customer's requirements by providing quality services according to their demands.</em></p>
              
            </blockquote>

          </div>
        </div>


        
      </div>
    </section>
    <section class="probootstrap_section">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Travel With Us</h2>
          </div>
        </div>
        
        <div class="row probootstrap-animate">
          <div class="col-md-12">
            <div class="owl-carousel js-owl-carousel-2">
              <?php
                                   $sql=mysqli_query($conn, "select * from post");
                                   while ($row=mysqli_fetch_array($sql)) {
                                    ?>
              <div>
                <div class="media probootstrap-media d-block align-items-stretch mb-4 probootstrap-animate">
                  <img src="admin/images/<?php echo $row['image'];?>" alt="Free Template by ProBootstrap" class="img-fluid">
                  <div class="media-body">
                    <h5 class="mb-3"><?php echo $row['title'];?></h5>
                    <p><?php echo $row['description'] ?></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <?php include 'includes/footer.php'; ?>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>