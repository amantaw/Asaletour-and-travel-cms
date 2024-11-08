<?php include 'admin/includes/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Asale|Top Places</title>
		<meta name="description" content="asale tour">
		<meta name="keywords" content="">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="text/css" href="assets/images/index.jpeg">

	</head>
	<body>
  <?php include 'includes/header.php'; ?>
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/camels.jpg');" data-stellar-background-ratio="0.5" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Top Place</h2>
          </div> 
        </div>
      </div>
    
    </section>
    <!-- END section -->
    
    <section class="probootstrap_section" id="section-city-guides">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">Best Attraction Site only you can get In Ethiopia</h2>
          </div>
        </div>
        <div class="row mb-4">
          <?php
                                   $sql=mysqli_query($conn, "select * from post");
                                   while ($row=mysqli_fetch_array($sql)) {
                                    ?>
          <div class="col-lg-3 col-md-6 probootstrap-animate mb-3">
            <a href="topplace.php" class="probootstrap-thumbnail">
              <img src="admin/images/<?php echo $row['image'];?>" alt="asale tour" class="img-fluid">
              <div class="probootstrap-text">
                <h3><?php echo $row['title'];?></h3>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>

      </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
	</body>
</html>