<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['user_name'])) {
    header("Location: Cusloginsignup.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    $number = $_POST['number'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM cususer WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO cususer (user_name, user_email, user_password, user_phone, created_date)
					VALUES ('$username', '$email', '$password', '$number', current_timestamp())";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Customer Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                $number = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

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
	<link rel="stylesheet" type="text/css" href="CSS/Cusloginstyle.css">

</head>
<body>
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
	<div class="container1">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
            <div class="input-group">
                <input type="text"  placeholder="Enter Phone Number" name="number" value="<?php echo $number; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="Cusloginsignup.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>