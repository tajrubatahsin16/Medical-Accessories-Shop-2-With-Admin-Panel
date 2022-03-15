<?php



$conn=mysqli_connect("localhost","root","","medical accessories shop");





function getTeam()
{
global $conn;

$get_pro="select * from team1 ";
$run_pro=mysqli_query($conn,$get_pro);
while( $row_pro=mysqli_fetch_array($run_pro))
{


$pro_name= $row_pro['name'];
$pro_qua= $row_pro['qualification'];

$pro_image= $row_pro['img'];

echo "

<div id='card'>


<img src='$pro_image' width='200' height='200' />
<h3>$pro_name</h3>
<p><b>  $pro_qua</b></p>
<div class='sci'>
<a href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a>
<a href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a>
<a href='#'><i class='fa fa-linkedin' aria-hidden='true'></i></a>


        </div>


</div>
";

}







}









?>