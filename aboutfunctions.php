<?php



$conn=mysqli_connect("localhost","root","","medical accessories shop");

//getting the categories


function getAboutPro()
{
global $conn;



$get_pro="select * from aboutus ";
$run_pro=mysqli_query($conn,$get_pro);
while( $row_pro=mysqli_fetch_array($run_pro))
{
$pro_qua= $row_pro['des'];



echo "

<div class='about'>



<p ><b> $pro_qua</b></p>

</div>

";

}







}









?>