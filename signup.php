<?php
include "dbconn.php";
if(isset($_POST["submit"]))
{
    $name= $_POST['uname'];
    $phone= $_POST['phone'];
    $email= $_POST['mail'];
    $password= $_POST['pass'];
    $ge= $_POST['gender'];
   
    $insert="Insert into data(name,pno,email,passw,gen)
    values('$name','$phone','$email','$password','$ge')";
    $query=mysqli_query($con,$insert);
if($query)
{?>
    <script>
     alert("Sign_Up_successfully");
     window.location.href='data.php';
    </script>
<?php
}
    else{?>
    <script>
     alert("Error");
    </script>
<?php } } ?>
<html><center>
    <head><h1>Sign Up</h1></head>
    <body>
        <form action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>'  method='post'><table border=1><tr>
            <tr><th>Name</th><th><input type="text" name="uname"></th></tr><br><br>
            <tr><th>Phone No</th><th><input type="number" name="phone"></th></tr><br><br>
            <tr><th>Email</th><th><input type="text" name="mail"></th></tr><br><br>
            <tr><th>Password</th><th><input type="password" name="pass"></th></tr><br><br>
            <tr><th>Gender</th><th><input type="radio" name="gender" value="M">M <input type="radio" name="gender" value="F" >F</th></tr><br><br><br>
            <tr><th colspan=2><input type="submit" value="submit" name="submit" ></th></tr></table>
        </form>
    
    </body>
    </center>
</html>
