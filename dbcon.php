<?php
$server="localhost";
$username="root";
$password="";
$dbname="sales";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
{
//echo"connected successfilly";
}
else
{
//echo"not connected";
}
?>