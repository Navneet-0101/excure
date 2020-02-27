<?php
include_once "connection.php";
$regno=$_GET["regno"];
$d="delete from buses where regno='$regno'";
if(mysqli_query($con,$d))
    header("location:viewbuses.php");
else
    echo $d;
?>