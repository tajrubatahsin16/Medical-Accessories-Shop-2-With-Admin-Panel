<?php



$conn=mysqli_connect("localhost","root","","medical accessories shop");
//getting the user IP address
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//creating the shopping cart
function cart()
{
if(isset($_GET['add_cart']))
{
    global $conn;
    $ip=getIp();
$pro_id= $_GET['add_cart'];
$check_pro=" select * from cart where  ip_add='$ip' AND p_id='$pro_id'";
$run_check=mysqli_query($conn,$check_pro);
if(mysqli_num_rows($run_check)>0)
{
    echo "";
}
else{
    $insert_pro="insert into cart(p_id,ip_add) values('$pro_id','$ip')";
    $run_pro=mysqli_query($conn,$insert_pro);
    echo "<script>   window.open('product.php'   ,  '_self')         </script>";
}
}
}
function procart()
{
if(isset($_GET['add_cart']))
{
    global $conn;
    $ip=getIp();
$pro_id= $_GET['add_cart'];
$check_pro=" select * from cart where  ip_add='$ip' AND p_id='$pro_id'";
$run_check=mysqli_query($conn,$check_pro);
if(mysqli_num_rows($run_check)>0)
{
    echo "";
}
else{
    $insert_pro="insert into cart(p_id,ip_add) values('$pro_id','$ip')";
    $run_pro=mysqli_query($conn,$insert_pro);
    echo "<script>   window.open('covid-section.php'   ,  '_self')         </script>";
}
}
}
//getting the total added items
function total_items()
{
    if(isset($_GET['add_cart']))
    {
        global $conn;
        $ip=getIp();
        $get_items="select *  from cart where ip_add= '$ip' ";
        $run_items=mysqli_query($conn,$get_items);
        $count_items=mysqli_num_rows($run_items);
    }
         else{
            global $conn;


            $ip=getIp();
        $get_items="select *  from cart  where ip_add= '$ip'";
        $run_items=mysqli_query($conn,$get_items);
        $count_items=mysqli_num_rows($run_items);   
        }
        echo $count_items;
    
}
//getting the total price of the items in the cart
function total_price()
{
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
  $values=array_sum($product_price);
  $total +=$values;

}

}

echo  "BDT". $total;

}
//getting the categories
function getcats()
{
    global $conn;
$get_cats= "select * from categories";
$run_cats=mysqli_query($conn,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{
    $cat_id=$row_cats['cat_id'];
    $cat_title=$row_cats['cat_title'];
    echo "<li> <a href='product.php?cat=$cat_id' >$cat_title</a> </li>";
}
}



function getPro()
{
    if(!isset($_GET['cat'])){
        global $conn;
     
         $get_pro="select * from products   LIMIT 0,17";
        $run_pro=mysqli_query($conn,$get_pro);
        while( $row_pro=mysqli_fetch_array($run_pro))
        {
        $pro_id= $row_pro['product_id'];
        $pro_cat= $row_pro['product_cat'];
        
        $pro_title= $row_pro['product_title'];
        $pro_price= $row_pro['product_price'];
        
        $pro_image= $row_pro['product_image'];
        echo "
        
        <div id='single_product'>
        
        <h3 class='pic1'>$pro_title</h3>
        <img src= 'admin_area/product_images/$pro_image' width='150' height='150' />
        <p><b>price: BDT $pro_price</b></p>
        
   
<a href='details.php? pro_id=$pro_id' style='float:left;'><button style='float:right'class='btn btn-info'>Details</button> </a>

<a href='product.php ?add_cart=$pro_id'><button style='float:right' class='btn btn-info ' >Add to cart </button></a>
        
        
        
        
        
        
        </div>
        ";

}


    }




}







function getCatPro()
{
    if(isset($_GET['cat'])){
  $cat_id=$_GET['cat'];

global $conn;
$get_cat_pro="select * from products where product_cat='$cat_id'";
$run_cat_pro=mysqli_query($conn,$get_cat_pro);
$count_cats=mysqli_num_rows($run_cat_pro);

if($count_cats==0)
{
    echo "<h2 style='padding :20px;'> No Products found in the category</h2>";
}
while( $row_cat_pro=mysqli_fetch_array($run_cat_pro))
{
$pro_id= $row_cat_pro['product_id'];
$pro_cat= $row_cat_pro['product_cat'];

$pro_title= $row_cat_pro['product_title'];
$pro_price= $row_cat_pro['product_price'];

$pro_image= $row_cat_pro['product_image'];




echo "

<div id='single_product'>

<h3 class='pic1'>$pro_title</h3>
<img src='$pro_image' width='100' height='100' />
<p><b>price: BDT  $pro_price</b></p>
<a href='details.php? pro_id=$pro_id' style='float:left;'><button style='float:right'class='btn btn-info'>Details</button> </a>

<a href='product.php ?add_cart=$pro_id'><button style='float:right' class='btn btn-info ' >Add to cart </button></a>
</div>

";

}




    }


}










?>