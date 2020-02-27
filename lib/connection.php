<?php
error_reporting(1);
$con=mysqli_connect("localhost","root",null,"redbus");
if(!$con)
    die( "Connection failed due to <strong>".mysqli_connect_error()."</strong>");
//else
//    echo "Connection Made";
?>