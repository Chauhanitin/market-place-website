<?php
include "../mysql/db_connection.php";

if(isset($_POST['login']))
{$email=$_POST['email'];
 $password=$_POST['password'];
//   echo "$email";
//   echo "$password";

$sql = mysqli_query($conn,"SELECT * FROM user WHERE Email='$email';");
$row_count=mysqli_num_rows($sql);
$row_data=mysqli_fetch_assoc($sql);

if ($row_count>0) 
{
    if ($password==$row_data['Password']) {
        echo "<script type='text/javascript'>alert('Logged in successfully')</script>";
        header('location:../index.html');
    }
    else {
        echo "<script type='text/javascript'>alert('Password does not match')</script>";
    }
	
}
else 
{ 
	 echo "<script type='text/javascript'>alert('Invalid credential')</script>";
}
}
?>