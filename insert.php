<html>
<head>Data</head>
<body>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
 	Item No.<input type="number" name="itno">
	Item Name<input type="text" name="itn">
	Item Price<input type="number" name="itp" id="a"  onmouseout="result()">
	Quantity<input type ="number" name="itq" id="b" onmouseout="result()">
	Total <input type="number" name="itt" id="r"> 
	<input type="submit" value="submit" name="submit">
</form>
<script>
	function result()
	{
		var a = document.getElementById("a").value;
		var  b = document.getElementById("b").value;
		var re = a*b;
		document.getElementById("r").value = re;
	}
</script>
<a href="select.php"><input type='button' value="Show Data" name="Show Data">
</a>
</body>
</html>
<?php
include "dbcon.php";
if(isset($_POST['submit']))
{
$ino= $_POST['itno'];
$in= $_POST['itn'];
$ip= $_POST['itp'];
$qu= $_POST['itq'];
$to= $_POST['itt'];
?>

<?php
$insertq="insert into products(itemno,iname,iprice,quantity,total)
values('$ino','$in','$ip','$qu','$to')";
$query=mysqli_query($con,$insertq);
if($query)
{?>
<script>
alert("insrted successfully");
</script>
<?php
}
else{?>
<script>
alert("not inserted");
</script>
<?php } } ?>