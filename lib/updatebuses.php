<?php
include_once "connection.php";
$busname=$_POST["tbbusname"];
$regno=$_POST["tbregno"];
$mobile=$_POST["tbmob"];
$price=$_POST["tbprice"];
$sourcecity=$_POST["SourceCity"];
$destinationcity=$_POST["DestinationCity"];
$departuretime=$_POST["tbtime"];
$bustype=$_POST["tbtype"];
$drivername=$_POST["tbdrivername"];
$drivermobile=$_POST["tbdrivermob"];
$emergencyno=$_POST["tbemerno"];
$mticket=$_POST["tbticket"];
$cctv=$_POST["tbcctv"];
$heater=$_POST["tbheater"];
$hammer=$_POST["tbhammer"];
$blanket=$_POST["tbblanket"];
$water=$_POST["tbwaterbottle"];
$reading=$_POST["tbreading"];
$emergencyexit=$_POST["tbexit"];
$charge=$_POST["tbcharging"];
$fire=$_POST["tbfire"];
$tbdays=$_REQUEST['tbdays'];
$days='';
for ($i=0;$i<count($tbdays);$i++)
{
    $days.=$tbdays[$i].',';
}
$updateQuery = "UPDATE `buses` SET 
`busname`='$busname',`price`='$price',
`mobile`='$mobile',`drivername`='$drivername',`drivermobileno`='$drivermobile',`sourcecity`='$sourcecity',
`destinationcity`='$destinationcity',`daysofworking`='$days',
`departuretime`='$departuretime',`bustype`='$bustype',`m_ticket_supported`='$mticket',
`waterbottle`='$water',`blanket`='$blanket',`chargingpoint`='$charge',`readinglight`='$reading',`heater`='$heater',
`emergencyexit`='$emergencyexit',`fireextinguisher`='$fire',`hammer`='$hammer',`cctv`='$cctv',`emergencycontactno`='$emergencyno' 
WHERE regno='$regno'";

if (mysqli_query($con, $updateQuery))
{
    header("location:editbuses.php?msg=1");
}
else
    {
        header("location:editbuses.php?msg=0");
    }
?>