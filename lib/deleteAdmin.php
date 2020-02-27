<?php
include_once "connection.php";
$email=$_GET["email"];
$d="delete from admin where email='$email'";
if(mysqli_query($con,$d))
    header("location:viewAdmin.php");
else
    echo $d;
?>
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 06-Jul-18
 * Time: 2:53 PM
 */