<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

</head>
<style>

*{


  font-family: Times Roman;
  font-size: 18px;
  font: bolder;
  color: white;

}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(a2.jpeg);
    background-position: center;
    background-size: cover;
    
}
table{


margin: auto;
text-align: center;
}


</style>
<body>
    




<table class="table table-dark w-75 ">
  <thead>
    <tr>
      
      
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
  <tbody>
    <tr>







<?php     include("connection.php");

$get_pro="select * from products   ";
$run_pro=mysqli_query($conn,$get_pro);
$i=0;
while( $row_pro=mysqli_fetch_array($run_pro))
{


$pro_title= $row_pro['product_title'];
$pro_price= $row_pro['product_price'];

$pro_image= $row_pro['product_image'];

$i++;

?>



<td><?php  echo $i;       ?></td>
<td><?php  echo $pro_title;       ?></td>
<td><img src="product_images/<?php echo $pro_image;?> "width="60" height="60" /></td>
<td><?php  echo $pro_price;    ?></td>

</tr>
<?php }?>
</tbody>
</table>
</body>
</html>