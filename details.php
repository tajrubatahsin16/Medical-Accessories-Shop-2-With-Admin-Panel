<!DOCTYPE html>
<?php



include ("functions/functions.php");




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/cart.css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

<div class="container bg-dark ">
<div class="row">

<!-- Navigation Bar ends -->
<!-- Content wrapper starts -->
<div class="content_wrapper">

<div id="sidebar">
<div id="sidebar_title" class="text-white">
Categories
</div>
<ul id="cats">
<?php   getCats();       ?>
</ul>


</div>
<div id="content_area">





<a href='product.php' style='float:right;'><button style='float:right'class='btn btn-info'>Go Back</button> </a>

<div id="products_box">
<?php
    if(isset($_GET['pro_id']))
    
    {
$product_id=$_GET['pro_id'];

$get_pro="select * from products where product_id='$product_id'";
$run_pro=mysqli_query($conn,$get_pro);
while( $row_pro=mysqli_fetch_array($run_pro))
{
$pro_id= $row_pro['product_id'];

$pro_title= $row_pro['product_title'];
$pro_price= $row_pro['product_price'];

$pro_image= $row_pro['product_image'];
$pro_desc= $row_pro['product_desc'];
echo "

<h3 class='text-white detailstittle'>$pro_title</h3>
<img src='product_images/$pro_image' class='img-thumbnail rounded '  width='200' height='200' />
<p class='text-white'><b> <b>PRICE</b> :BDT $pro_price</b></p>
<p class='text-white detailsdesc'>   $pro_desc     </p>




<a href='product.php ?pro_id=$pro_id'><button style='text-justify 'class='btn btn-info btn-lg'>
Add to cart </button></a>
";
}
}

?>


</div>

</div>

<!-- Content wrapper ends -->


    </div>

<!-- Main Container ends here -->
</div>

</div>





</body>
</html>