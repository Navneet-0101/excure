<?php
@session_start();
include "connection.php";
$email=$_POST["Email"];
$password=$_POST["Password"];
$select="select * from user_signup where email='$email' and password='$password'";
$result=mysqli_query($con,$select);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
    $_SESSION["user_email"]=$email;
    $_SESSION["user_name"]=$row[2];
    header("location:index.php");
}
else
{
   header("location:index.php?msg=5");
}
?>