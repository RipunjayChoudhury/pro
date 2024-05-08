<html>
    <head><h1>Loig In</h1></head>
    <body>
        <form action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>' method='post'>
        Email<input type="text" name="email">
        Password<input type="password" name="pass">
        <input type="submit" value="log in" name="submit">
</form>
</body>
</html>
<?php
include 'dbconn.php';
if(isset($_POST['submit']))
{
    $username=$_POST['email'];
    $passw=$_POST['pass'];
    $sql="select * from data where email= '$username'";
    $query= mysqli_query($con,$sql);
    $uname_count=mysqli_num_rows($query);
    if($uname_count)
    {
        $upass=mysqli_fetch_assoc($query);
        $_SESSION['name']=$upass['email'];
        $dpass=$upass['passw'];
        //$pass_decode=password_verify($passw,$dpass);
        if($dpass==$passw)
        {
            echo "Log in successful";
        ?>
        <script>
            window.location.href='data.php';
            </script>
        <?php 
        }
        else
        {
            echo"Password wrong";
        }  
    }
   
    else
    {
        echo "Invalid username";
    } 
    
}    

?>