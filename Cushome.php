<!DOCTYPE html>
<?php



include ("functions/functions.php");
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: Cusloginsignup.php");
}



?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
  <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/Cusstyle.css" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Medical Accessories Shop</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="Cushome.php">Home</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link" href="product.php">Go to Cart</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="Cuslogout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
		</ol>
	<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="First slide" class="d-block w-100" src="images/cus1.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">Get Your Treatment</h5>
					<p class="animated bounceInLeft" style="animation-delay: 2s">Give us your prescription and get any kind of medicine that you need for your treatment.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="images/cus2.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated slideInDown" style="animation-delay: 1s">Are You Done With Daily Check-Up?</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Check your blood pressure, sugar level, oxygen saturation, pulse etc. regularly by purchasing these accessories from us in reasonable price.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="images/cus3.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated zoomIn" style="animation-delay: 1s">Need Emergency Medical Accessories?</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">In your crisis, we can deliver the emergency medical accessories at your home within a short time.</p>
				</div>
			</div>
			</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>