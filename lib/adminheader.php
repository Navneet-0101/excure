<?php
@session_start();
if(!isset($_SESSION["email"]))
{
    header("location:adminlogin.php");
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
                    <h1><a href="adminhome.php">Excure</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-right">
                        <ul class="nav navbar">
                            <li><a href="adminhome.php"><span class='glyphicon glyphicon-home'>Home</span></a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admins

                                    <span class="caret"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="addAdminDesign.php" data-link-alt="Add New Admin">Add New Admin</a></li>
                                        <li><a href="viewAdmin.php" data-link-alt="View Admin">View Admin</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies

                                    <span class="caret"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="addcompany.php" data-link-alt="Add New Admin">Add New Company</a></li>
                                        <li><a href="viewcompany.php" data-link-alt="View Admin">View Company</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="adminchangepassword.php"><span class='glyphicon glyphicon-pushpin'>ChangePassword</span></a></li>
                            <li><a onclick="return confirm('Are you sure you want to logout?')" href="adminlogout.php">
                                    <span class='glyphicon glyphicon-log-out'>LogOut</span></a></li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //navigation -->
        <!-- banner-text -->
