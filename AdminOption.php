<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/Optionstyle.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Medical Accessories Shop</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="Adminhome.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="AdminOption.php">Products</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="addetails.php">Messages</a>
					</li>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow" style="width: 25rem; overflow:hidden; height: 450px;">
                    <div class="inner">
                        <img src="images/insertpro.jpg" class="card-img-top" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Insert Products</h5>
                        <p class="card-text">Update Your Product Stock And Run Business Successfully!</p>
                        <a href="admin_area/insert_product.php" class="btn btn-success" style="font-family:'Times New Roman', Times, serif; font-weight:bold;">Insert</a> 
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow" style="width: 25rem; overflow:hidden;">
                    <div class="inner">
                        <img src="images/viewpro.jpg" class="card-img-top" alt="Card image cap">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">View Products</h5>
                        <p class="card-text">View All The Available Products In Your Stock And Stay Updated!</p>
                        <a href="admin_area/view.php" class="btn btn-success" style="font-family:'Times New Roman', Times, serif; font-weight:bold;">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>