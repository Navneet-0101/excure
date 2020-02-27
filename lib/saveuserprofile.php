<?php

$email=$_POST["tbemail"];
//$password=$_POST["tbpass"];
$fullname=$_POST["tbfullname"];
$mobileno=$_POST["tbmobile"];
$gender=$_POST["tbgender"];
$address=$_POST["tbaddress"];
$dob=$_POST["tbdob"];
$actualname=$_FILES["tbphoto"]["name"];
$photosize=round($_FILES["tbphoto"]["size"]/1024,2);
$temppath=$_FILES["tbphoto"]["tmp_name"];
$path="userphotos/$actualname";
$ext=strtolower(pathinfo($actualname,PATHINFO_EXTENSION));
include "connection.php";
//echo $ext;
//echo $photosize;
//$selectQ="select * from user_signup where email='$email'";
//$result=mysqli_query($con,$selectQ);
//if(mysqli_num_rows($result)>0)
//{
//    header("location:index.php?msg=2");
//}
//else{
    if ($ext != "jpg" and $ext != "png") {
        header("location:userprofile.php?profile=3");
    } elseif ($photosize > 100) {
        header("location:userprofile.php?profile=4");
    } else {
        move_uploaded_file($temppath, $path);
        include "connection.php";
        $updateQuery = "UPDATE `user_signup` SET `fullname`='$fullname',
`mobileno`='$mobileno',`gender`='$gender',`dob`='$dob',`address`='$address',
`photo`='$path' WHERE email='$email'";
        if (mysqli_query($con, $updateQuery)) {
            //  echo "signup success";
            header("location:userprofile.php?profile=1");
        } else {
//  echo "byee";
            header("location:userprofile.php?profile=0");
        }
//    }
}
?>
