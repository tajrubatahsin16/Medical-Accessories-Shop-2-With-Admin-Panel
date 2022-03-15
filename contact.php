
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/contactstyle.css">
    <title>Contact Us</title>
  </head>
  <body>

<?php
    $servername="localhost";
    $username="root";

    $password="";
    $database="medical accessories shop";
    $conn=mysqli_connect($servername,$username,$password,$database);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $des=$_POST['desc'];

  
      $sql="INSERT INTO `contacts` ( `name`, `email`, `concern`, `dt`) VALUES ( '$name', '$email', '$des',current_timestamp())";
$result=mysqli_query($conn,$sql);

if($sql==TRUE)
{
  
echo '<div class="container">

<div class="alert  alert1 alert-success " role="alert">
<h4 class="alert-heading">Thanks for getting in touch! &#128522; </h4>
<p>We appreciate you for contacting us. One of our team-members will get back in touch with you soon!Have a great day!</p>
</div>


</div>';



  exit();



}
else{
  echo '<div class="container">

<div class="alert  alert1 alert-danger " role="alert">
<h4 class="alert-heading">Sorry! Your form is not submitted.please try again</h4>

</div>


</div>';
}

    
    }

    
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">Medical Accessories Shop</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="aboutus.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Option.php">Login/Sign Up</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


<div class="full">

<div class="container contact-form w-75 m-auto h-75 ">
<h1 class="text-center">Contact Form</h1>
      
<hr>
<div class="row  text1" >

<div class="col-md-6 m-auto  mt-5">

   <i class="fa fa-map-marker "> </i> <span class="form-info">W-343 coseis Meits UT </span><br>
   <i class="fa fa-envelope "> </i> <span class="form-info">hryig@gmail.com </span><br>
   <i class="fa fa-phone"></i> <span class="form-info">09888888887 </span>
</div>
<div class="col-md-6">

        <form action="contact.php" method="POST" autocomplete="off">
            <div class="contact my-2">
              <label for="name">Username: </label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="contact my-2">
              <label for="email">E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
  </div>
            <div class="contact my-2">
              <label for="desc">Message: </label>
              <textarea name="desc" id="desc" class="form-control" cols="20" rows="2"></textarea>
            </div>
            <button name="button1" id="submit" class=" btn btn btn-outline-success btn-sm"  >Send Message</button>
    

        </form>
</div>
    </div>
</div>

</div>

  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
