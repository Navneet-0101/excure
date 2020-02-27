<?php
@session_start();
if(!isset($_SESSION["user_email"]))
{
   header("location:index.php");
}
else
{   include "connection.php";
    $email=$_SESSION["user_email"];
    $user="select * from user_signup where email='$email'";
    $user_result=mysqli_query($con,$user);
    $user_row=mysqli_fetch_array($user_result);
}
?>
<div class="agileits-banner">
    <div class="bnr-agileinfo">
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

                    <h1><a href="index.php">Excure</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-right">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="index.php" data-link-alt=" Home"><span class='glyphicon glyphicon-home'>Home</span></a></li>
            <li><a href="userprofile.php" data-link-alt="Admin Home"><span class='glyphicon glyphicon-user'>Profile</span></a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Settings
                    <span class="caret"></span>
                    <ul class="dropdown-menu">
                        <li><a href="userchangepassword.php"><span class='glyphicon glyphicon-pushpin'>ChangePassword</span></a></li>
                        <li><a onclick="return confirm('Are you sure you want to logout?')" href="userlogout.php">
                                <span class='glyphicon glyphicon-log-out'>LogOut</span></a></li>
                    </ul>
                </a>
            </li>

        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

