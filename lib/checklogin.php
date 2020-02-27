<?php
@session_start();
include_once  "connection.php";
$email=$_POST["tbemail"];
$password=$_POST["tbpass"];
$selectQuery="select * from admin where email='$email' and password='$password'";
$result=mysqli_query($con,$selectQuery);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0)
{
    $_SESSION["email"]=$email;
    $_SESSION["name"]=$row[1];
    header("location:adminhome.php");
}
else
{
    header("location:adminlogin.php?msg='Incorrect email or password'");
}


?>
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 10-Jul-18
 * Time: 8:43 PM
 */