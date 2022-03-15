<!DOCTYPE html>
<?php



include ("functions/functions.php");




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />
    <link rel="stylesheet" href="CSS/cart.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
.nav-link h2{
	font-weight: bold;
	 font-size: 1.5em;
	 font-family: 'Style Script', cursive;
	 color:red;
  
	 animation: animate 1.5s linear infinite;
   } 
   body{
    background-color: #334756;
   }
	
   @keyframes animate{
	 0%{
	   opacity: 0;
	 }
	 50%{
	   opacity: 0.7;
	 }
	 100%{
	   opacity: 0;
	 }
   }
 
</style>

</head>
<body>
<div class="container ">

<div class="row">


<div class="content_wrapper ">

<div id="sidebar" >
<div id="sidebar_title"  >
Categories
</div>
<ul id="cats" >
<?php   getCats();       ?>
</ul>


</div>






<div id="content_area">
<nav class="navbar navbar-expand-lg navbar-light  ">
<div class="container">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fas fa-2x fa-bars navbar_icon"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item ">
        <a class="nav-link text-center" href="#">  <?php  cart() ; ?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-center " href="#">Total Items:<?php total_items();   ?>Total price:
<?php total_price(); ?></a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-center text-success"href="Cushome.php"  ><h2>Go Back to Home</h2></a>


      </li>
      <li class="nav-item">
      <a class="nav-link text-center"href="cart.php">Go To Cart</a>
     
      </li>
   
    </ul>
  </div>







</div>
  </nav>



<div id="form">

<form action="results.php" method="get" enctype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a product"/>
<input type="submit"  name="search" value="Search">

</form>

<div id="products_box">

<?php    getPro();       ?>
         <?php  getCatPro(); ?>
</div>

</div>

</div>

<!-- Content wrapper ends -->


    </div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>