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





</head>
<body>






<div class="container">
<h1 class="text-center tt ">Cart Page</h1>
<form action="" method="post" enctype="multipart/form-data">
<!-- <table align="center" width="700" bgcolor="skyblue"> -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Remove</th>
      <th scope="col">Product(s)</th>
    
      <th scope="col">Total Price</th>
    </tr>
</thead>
<?php
  $total=0;
  global $conn;
  $ip=getIp();
  $sel_price="select * from cart where ip_add='$ip'";
$run_price=mysqli_query($conn,$sel_price);
while($p_price=mysqli_fetch_array($run_price))
{
  $pro_id= $p_price['p_id'];
  $pro_price="select * from products where product_id='$pro_id'";
$run_pro_price =mysqli_query($conn,$pro_price);
while($pp_price=mysqli_fetch_array($run_pro_price))
{
  $product_price=array($pp_price['product_price']);
  $product_title= $pp_price['product_title'];
  $product_image= $pp_price['product_image'];
  $single_price=$pp_price['product_price'];
$values= array_sum($product_price);
$total += $values;





?>
<tbody>
<tr >
<td> <input type="checkbox" name="remove[]" value="<?php echo $pro_id;   ?>"/></td>
<td><?php   echo $product_title;       ?> <br>
<img src="<?php   echo $product_image;  ?>" width="60" height="60" class="img1"/>


</td>
<!-- <td><input type="text" size="4" name="qty"/></td> -->
<td><?php echo "BDT".  $single_price;      ?></td>

</tr>



<?php }} ?>
<tr>
<!-- <tr align="right"> -->
<td><b>Sub Total:</b></td>
<td   ><?php  echo  "BDT".$total; ?></td>
</tr>
<tr>
<!-- <tr align="center"> -->
  <td >
    <input type="submit" name="update_cart" value="Remove Item" class="ut"/></td>
  <td><input type="submit" name="continue" value="Continue Shoppping" class="ct"/></td>
  <td><button type="button" class="btn btn-light checkout"><a href ="confirm.php" >
    checkout</a></button></td>
</tr>
</tbody>
</table>


</form>
<?php
$ip=getIp();
if(isset($_POST['update_cart']))
{
  foreach($_POST['remove'] as $remove_id)
  {
     $delete_product= "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
       $run_delete=mysqli_query($conn,$delete_product);
       if($run_delete)
       {
       echo "<script>        window.open('cart.php','_self')      </script>";
       }
  }

}

if(isset($_POST['continue']))
{
  echo "<script>        window.open('product.php','_self')      </script>";
}

?>
</div>
</div>

</div>
</div>
<!-- Content wrapper ends -->




<!-- Main Container ends here -->






</body>
</html>