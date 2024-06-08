<html>
<head>Data</head>
<body><form>
<table border=1><thead>
<tr><th> Item No.</th>
<th> Item Name</th>
<th> Item Price</th>
<th> Quantity</th>
<th> Total</th>
<th colspan=2>Select</th>
</tr>
</thead>
<?php 
include "dbcon.php";
$select="Select * from products";
$query=mysqli_query($con,$select);
while($result=mysqli_fetch_assoc($query)){?>
<tbody>
<tr>
<td><?php echo $result ['itemno'];?></td>
<td><?php echo $result ['iname'];?></td>
<td><?php echo $result ['iprice'];?></td>
<td><?php echo $result ['quantity'];?></td>
<td><?php echo $result ['total'];?> </td>
<th><a href="edit.php?id=<?php echo $result['itemno'];?>"> <input type="button" value="Edit" ></a></th>
<th><input type="button" value="Delete" name="select"></th>
</tr>
</tbody>
<?php }?>
</form>
</table></body></html>
