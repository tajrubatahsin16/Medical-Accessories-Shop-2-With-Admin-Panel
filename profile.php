<?php

session_start();

if (!isset($_SESSION["user_name"])) {
    header("Location: loginsignup.php");
}

include 'config.php';

if (isset($_POST["submit"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));

    if ($password === $cpassword) {
        $photo_name = $_FILES["photo"]["name"];
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
            $sql = "UPDATE user SET user_name='$full_name', user_password='$password', photo='$photo_new_name' WHERE user_name='{$_SESSION["user_name"]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
                echo  $conn->error;
            }
        }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/profilestyle.css" />
</head>
<body class="profile-page">
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
    <div class="wrapper">
        <form action="" method="post" enctype="multipart/form-data">
            <?php 
            
            $sql = "SELECT * FROM user WHERE user_name='{$_SESSION["user_name"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="inputBox">
                <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo $row['user_name']; ?>"  required>
            </div>
            <div class="inputBox">
                <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $row['user_email']; ?>" disabled required>
            </div>
            <div class="inputBox">
                <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $row['user_password']; ?>"  required>
            </div>
            <div class="inputBox">
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php echo $row['user_password']; ?>"  required>
            </div>
            <div class="inputBox">
                <label for="photo">Photo</label>
                <input type="file" accept="image/*" id="photo" name="photo" required>
            </div>
            <img src="uploads/<?php echo $row["photo"]; ?>" width="150px" height="auto" alt="">
            <?php
                }
            }

            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>
</html>