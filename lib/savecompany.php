<?php
$companyname=$_POST["tbcompanyname"];
$description=$_POST["tbdes"];
$proprietor=$_POST["tbprop"];
$mobileno=$_POST["tbmob"];
$email=$_POST["tbemail"];
$password=$_POST["tbpass"];
$actualname=$_FILES["tblogo"]["name"];
$photosize=round($_FILES["tblogo"]["size"]/1024,2);
$temppath=$_FILES["tblogo"]["tmp_name"];
$path="userphotos/$actualname";
$ext=strtolower(pathinfo($actualname,PATHINFO_EXTENSION));
include "connection.php";
//echo $ext;
//echo $photosize;
$selectQ="select * from companies where email='$email'";
$result=mysqli_query($con,$selectQ);
if(mysqli_num_rows($result)>0)
{
    header("location:addcompany.php?msg=2");
}
else {
    if ($ext != "jpg" and $ext != "png") {
        header("location:addcompany.php?msg=3");
    } elseif ($photosize > 1000) {
        header("location:addcompany.php?msg=4");
    } else {
        move_uploaded_file($temppath, $path);
        include "connection.php";
        $ch = curl_init();

        $msg="Your Login Credentials are as Follows:- Email ".$email." Password ".$password.". You may go to the following URL to Login http://localhost/redbus/companylogin.php";
        $message=urlencode($msg);
        curl_setopt($ch, CURLOPT_URL,"http://server1.vmm.education/VMMCloudMessaging/AWS_SMS_Sender?");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            "username=phpmay2018&password=YD411F1R&message=".$message."&phone_numbers=".$mobileno);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);

        curl_close ($ch);


        $insertQuery = "INSERT INTO `companies`(`id`, `companyname`, `logo`, `description`, `proprietor`, `mobileno`, `email`, `password`)
 VALUES (null,'$companyname','$path','$description','$proprietor','$mobileno','$email','$password')";
        if (mysqli_query($con, $insertQuery)) {
            //  echo "signup success";
            header("location:addcompany.php?msg=1");
        } else {
//  echo "byee";
            header("location:addcompany.php?msg=0");
        }
    }
}
?>
