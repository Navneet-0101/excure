<?php
$email = $_POST["Email"];
$password = $_POST["Password"];
$fullname = $_POST["Name"];
//$mobileno=$_POST["tbmobile"];
include "connection.php";
//if ($email==null)
//{
//    echo ":::::::::::::";
//}
$selectQ = "select * from user_signup where email='$email'";
$result = mysqli_query($con, $selectQ);
if (mysqli_num_rows($result) > 0) {
    header("location:index.php?signup=2");
} else {
    $insertQuery = "INSERT INTO `user_signup`(`email`, `password`, `fullname`)
VALUES ('$email','$password','$fullname')";
    if (mysqli_query($con, $insertQuery)) {
        //  echo "signup success";
        header("location:index.php?signup=1");
    } else {
//  echo "byee";
        header("location:index.php?signup=0");
    }

}
?>
