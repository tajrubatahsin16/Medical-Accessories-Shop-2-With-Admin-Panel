<?php



$conn=mysqli_connect("localhost","root","","medical accessories shop");
//getting the categories


function getCont()
{
global $conn;



$get_cont="select * from contacts ";
$run_cont=mysqli_query($conn,$get_cont);
while( $row_pro=mysqli_fetch_array($run_cont))
{
$cont_id= $row_pro['sno'];


$cont_name= $row_pro['name'];
$cont_email= $row_pro['email'];
$cont_concern= $row_pro['concern'];
$cont_dt= $row_pro['dt'];



echo "



<tr>

<th>$cont_name</th>
<th>$cont_email</th>
<th>$cont_concern</th>
<th>$cont_dt</th>

</tr>





";

}







}









?>