<?php
    include'dbcon.php';
    $in=$_GET['id'];
    $selectq="select * from products where itemno=$in";
    $query=mysqli_query($con,$selectq);
    $result=mysqli_fetch_assoc($query);
	
	
	if(isset($_POST['submit']))
	{
		$item=$_POST['itno'];
		$inn=$_POST['itn'];
		$ip=$_POST['itp'];
		$qn=$_POST['itq'];
		$t=$_POST['itt'];
		$updateq="update products set iname='$inn',iprice='$ip',quantity='$qn',total='$t' where itemno='$item'";
		$query=mysqli_query($con,$updateq);
	if($query)
{?>
<script>
		alert('Updated successfully');
</script>
<?php
	header('Location:select.php');
}
	else{
?>
<script>
	alert('Error');
</script>
<?php } } ?>

<html>
    <head>Edit Data</head>
    <body >
        <form method="post">
	        Item Name<input type="text" name="itn" value="<?php echo $result['iname'];?>">
	        Item Price<input type="number" name="itp" id="a" onmouseout="result()" value="<?php echo $result['iprice'];?>">
	        Quantity<input type ="number" name="itq" id="b" onmouseout="result()" value="<?php echo $result['quantity'];?>">
	        Total <input type="number" name="itt" id="r" value="<?php echo $result['total'];?>">
	        <input type="submit" value="update" name="submit">
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
</body>
</html>
	