<?php
include 'connection.php';
@session_start();
if(!isset($_SESSION["companyemail"]))
{
    header("location:companylogin.php");
}
else
{
    $email=$_SESSION["companyemail"];
    $com="select * from companies where email='$email'";
    $com_result=mysqli_query($con,$com);
    $com_row=mysqli_fetch_array($com_result);
}
?>
<!-- banner -->
<div class="agileits-banner">
    <div class="bnr-agileinfo">
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="companyhome.php">Excure</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-right">
                        <ul class="nav navbar">
                            <li><a href="companyhome.php"><span class='glyphicon glyphicon-home'>Home</span></a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Buses

                                    <span class="caret"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="addbuses.php" data-link-alt="Add New Admin">Add New Bus</a></li>
                                        <li><a href="viewbuses.php" data-link-alt="View Admin">View Buses</a></li>
                                    </ul>
                                </a>
                            </li>
<!--                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies-->
<!---->
<!--                                    <span class="caret"></span>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li><a href="addcompany.php" data-link-alt="Add New Admin">Add New Company</a></li>-->
<!--                                        <li><a href="viewcompany.php" data-link-alt="View Admin">View Company</a></li>-->
<!--                                    </ul>-->
<!--                                </a>-->
<!--                            </li>-->
                            <li><a href="bookinghistory.php">Booking History</a></li>
                            <li><a href="companychangepassword.php"><span class='glyphicon glyphicon-pushpin'>ChangePassword</span></a></li>
                            <li><a onclick="return confirm('Are you sure you want to logout?')" href="companylogout.php">
                                    <span class='glyphicon glyphicon-log-out'>LogOut</span></a></li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //navigation -->
        <!-- banner-text -->
