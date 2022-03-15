<!DOCTYPE html>
<?php


include ("aboutcontact.php");


?>





<head>
	<meta charset="UTF-8">
	<title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/contde.css" />
    <style>

.about p{


  font-family: 'Roboto', sans-serif;


}


    </style>
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
					<li class="nav-item active">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="AdminOption.php">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="addetails.php">Messages</a>
					</li>
					
                    <li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<div class="back">
<div class="example">CUSTOMER MESSAGES</div>
    <table id="customers">
    <tr>
 
    <th>Name</th>
    <th>Email</th>
    <th>Concern</th>
    <th>Date</th>
  </tr> 

    <?php   getCont();          ?>
</table>
</div>




</body>
</html>