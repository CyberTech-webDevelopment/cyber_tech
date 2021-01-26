<?php
session_start();
include "link.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="images/cyber-tech-logo.png">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css">

  <link rel="stylesheet" href="carousel/css/owl.carousel.min.css" >
  <link rel="stylesheet" href="carousel/css/style.css" >
</head>
<body>
    <?php include 'fixed-soc-icons.php' ?>
	  <?php include "navbar.php"; 
          include "index-sections/navbar-section.php";
          include "index-sections/services-section.php";
          include "index-sections/s-offers-section.php";
          include "index-sections/how-we-work-section.php";
          include "index-sections/projects-section.php";
          include "index-sections/our-clients-section.php";
          include "carousel/carousel.php";
          include "index-sections/our-team-section.php";
          include "index-sections/news-section.php";
          include "index-sections/clients-section.php";
          include "footer.php";
	?>



	<script src="js/navbar.js"></script>
  <script src="js/footer.js"></script>

	<script src="carousel/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="carousel/js/main.js"></script>
	<script>
   
  </script>
</body>
</html>
