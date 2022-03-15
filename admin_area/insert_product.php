<!DOCTYPE html>
<?php


include ("connection.php");


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Accessories Shop</title>
  <link rel='icon' href = 'images/icon.png' />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
 
  
<script>tinymce.init({selector:'textarea'});</script>


<style>


    *{


        font-family: Times Roman;
        font-size: 18px;
        font: bolder;
        color: black;

    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(a1.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

    table{
margin: auto;
     
        background-color: #6F8FAF;
    }
  
  
</style>




</head>
<body >
    <form action="insert_product.php" method="post" enctype="multipart/form-data">



<table align="center" width="700px" border="2"  >
<tr align="center">


<td colspan="8"><h2>Insert New Product Here</h2></td>
</tr>

<tr>

<td align="right" ><b>Product Title</b></td>
<td><input type="text" name="product_title" size="60" required/></td>




</tr>

<tr>

<td align="right" ><b>Product Category</b></td>
<td>

<select name='product_cat'>

<option> Select a category</option>

<?php

$get_cats= "select * from categories";
$run_cats=mysqli_query($conn,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
    $cat_id=$row_cats['cat_id'];
    $cat_title=$row_cats['cat_title'];
    echo "<option value='$cat_id'> $cat_title </option>";
}



?>


</select>


</td>




</tr>

<tr>

<td align="right"><b>Product Image</b></td>
<td><input type="file" name="product_image" required/></td>




</tr>

<tr>

<td align="right" ><b>Product Price</b></td>
<td><input type="text" name="product_price" required/></td>




</tr>

<tr>

<td   align="right"    ><b>Product Description</b></td>
<td><textarea name="  product_desc" col="20" rows="10">   </textarea>       </td>





</tr>
<tr>

<td   align="right"    ><b>Product Keywords</b></td>
<td><input type="text" name="product_keywords"size="50" required/></td>





</tr>

<tr align="center">

<td colspan="8"><input type="submit" name="insert_post"value="Insert Product Now"></td>



</tr>






</table>





</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>
<?php



if(isset($_POST['insert_post']))
{


$product_title=$_POST['product_title'];

$p_cat=$_POST['product_cat'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$product_keywords=$_POST['product_keywords'];
$product_image=$_FILES['product_image']['name'];
$product_image_tmp=$_FILES['product_image']['tmp_name'];
move_uploaded_file($product_image_tmp,"product_images/$product_image");
 $insert_product="insert into products ( product_title,product_cat,product_price,product_desc,product_image,product_keywords)
 values('$product_title','$p_cat','$product_price','$product_desc','$product_image','$product_keywords') ";
$insert_pro=mysqli_query($conn,$insert_product);
if($insert_pro)
{
    echo " <script>alert('  Product has been inserted')    </script>";
    echo "  <script>  window.open('admin.php ? insert_product.php',_self)       </script>";
}



}










?>