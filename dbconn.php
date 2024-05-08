<?php
    $server="Localhost";
    $username="root";
    $password="";
    $dbname="sales";

    $con=mysqli_connect($server,$username,$password,$dbname);
    if($con){
?>
<script>
    //alert("Successful");
</script>
<?php } else {
?>
<script>
    //alert("Error");
</script>
<?php } ?>