
<!doctype html>
<?php



include ("functions/functions.php");




?>



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/confirm.css">
    <title>Medical Accessories Shop</title>
    <link rel='icon' href = 'images/icon.png' />
  </head>









  <body>

<?php
   

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['customername'];
      $email = $_POST['email'];
      $address=$_POST['address'];
      $item = $_POST['item'];
      
      $totalprice=$_POST['totalprice'];


    $sql="INSERT INTO `checkout` ( `customername`,`email`, `address`,`item`,`totalprice`) VALUES ( '$name', 
    '$email', '$address','$item','$totalprice')";
$result=mysqli_query($conn,$sql);

if($sql==TRUE)
{
  
echo '<div class="container">

<div class="alert  alert1 alert-success " role="alert">
<h4 class="alert-heading"> Thank you for your purchase!&#128522; </h4>

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


<div class="full">

<div class="container contact-form w-75 m-auto h-100 ">
<h1 class="text-center">ORDER CONFIRMATION FORM</h1>
      
<hr>
<div class="row  text1" >


<div class="col-md-8">

<form action="confirm.php" method="POST" autocomplete="off">
        <?php cart();?>
            <div class="contact my-2">
              <label for="customername">Name: </label>
              <input type="text" name="customername" id="customername" class="form-control" required>
            </div>
            <div class="contact my-2">
              <label for="email">E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
  </div>
            <div class="contact my-2">
              <label for="address">Addres: </label>
              <input type="text" name="address" id="address" class="form-control" required>
  </div>

             <div class="contact my-2">
              <label for="totalprice">Total price: </label>
              <input type="text" name="totalprice" id="totalprice" class="form-control"value="<?php total_price();?>" >
            </div>
            <div class="contact my-2">
              <label for="item">Total Items: </label>
              <input type="text" name="item" id="item" class="form-control"value="<?php total_items();?>" >
            </div>







            <button name="button1" id="submit" class=" btn btn btn-outline-success btn-sm"  >Confirm Order</button>
    

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
