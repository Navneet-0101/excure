<?php
include_once "connection.php";
$id=$_GET["id"];
$d="delete from companies where id='$id'";
if(mysqli_query($con,$d))
    header("location:viewcompany.php");
else
    echo $d;
?>
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 06-Jul-18
 * Time: 2:53 PM
 */