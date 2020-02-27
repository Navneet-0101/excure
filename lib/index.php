<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerFiles.html";
    ?>
    <style>
        .h {
            font-style: italic;
        }
    </style>
</head>
<body>
<!-- banner -->
<div class="agileits-banner">
    <div class="bnr-agileinfo">
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="index.php">Excure</a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-right">
                        <ul class="nav navbar">
                            <?php
                            @session_start();
                            if (isset($_SESSION["user_email"])) {
                                ?>
                                <li><a href="index.php" data-link-alt=" Home"><span class='glyphicon glyphicon-home'>Home</span></a>
                                </li>
                                <li><a href="userprofile.php" data-link-alt="Admin Home"><span
                                                class='glyphicon glyphicon-user'>Profile</span></a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Settings
                                        <span class="caret"></span>
                                        <ul class="dropdown-menu">
                                            <li><a href="userchangepassword.php"><span
                                                            class='glyphicon glyphicon-pushpin'>ChangePassword</span></a>
                                            </li>
                                            <li><a onclick="return confirm('Are you sure you want to logout?')"
                                                   href="userlogout.php">
                                                    <span class='glyphicon glyphicon-log-out'>LogOut</span></a></li>
                                        </ul>
                                    </a>
                                </li>

                                <?php
                            } else {
                                include "menu.php";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //navigation -->
        <!-- banner-text -->
        <div class="banner-text agileinfo">
            <div class="container">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-w3lstext">

                            </div>
                        </li>
                        <li>
                            <div class="banner-w3lstext">

                            </div>
                        </li>
                        <li>
                            <div class="banner-w3lstext">

                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="text-center h" style="color:white">Stop Looking. Start Exploring!</h3>
                <div class="col-md-12 features-w3grid">
                    <div class="features-row2">
                        <div class="col-sm-2"><h4>Book a Ticket</h4>
                        </div>
                        <div class="col-sm-8">
                            <div class="col-sm-4"><input type="text" name="doj" id="doj"
                                                         data-rule-required="true" data-msg-required="*Required."
                                                         placeholder="Date of journey" class="form-control dtp">
                            </div>
                            <div class="col-sm-4">
                                <select name="source" id="source" class="form-control" data-rule-required="true">
                                    <option value="">--Choose Source--</option>
                                    <option>Ahmedabad</option>
                                    <option>Bengaluru/Bangalore</option>
                                    <option>Chandigarh</option>
                                    <option>Chennai</option>
                                    <option>Delhi</option>
                                    <option>Gurgaon</option>
                                    <option>Hyderabad/Secunderabad</option>
                                    <option>Kolkatta</option>
                                    <option>Mumbai</option>
                                    <option>Noida</option>
                                    <option>Pune</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Andhra
                                                Pradesh-</i></font></option>
                                    <option>Anantapur</option>
                                    <option>Guntakal</option>
                                    <option>Guntur</option>
                                    <option>Hyderabad/Secunderabad</option>
                                    <option>kakinada</option>
                                    <option>kurnool</option>
                                    <option>Nellore</option>
                                    <option>Nizamabad</option>
                                    <option>Rajahmundry</option>
                                    <option>Tirupati</option>
                                    <option>Vijayawada</option>
                                    <option>Visakhapatnam</option>
                                    <option>Warangal</option>
                                    <option>Andra Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Arunachal
                                                Pradesh-</i></font></option>
                                    <option>Itanagar</option>
                                    <option>Arunachal Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Assam-</i></font>
                                    </option>
                                    <option>Guwahati</option>
                                    <option>Silchar</option>
                                    <option>Assam-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Bihar-</i></font>
                                    </option>
                                    <option>Bhagalpur</option>
                                    <option>Patna</option>
                                    <option>Bihar-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Chhattisgarh-</i></font>
                                    </option>
                                    <option>Bhillai</option>
                                    <option>Bilaspur</option>
                                    <option>Raipur</option>
                                    <option>Chhattisgarh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Goa-</i></font>
                                    </option>
                                    <option>Panjim/Panaji</option>
                                    <option>Vasco Da Gama</option>
                                    <option>Goa-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Gujarat-</i></font>
                                    </option>
                                    <option>Ahmedabad</option>
                                    <option>Anand</option>
                                    <option>Ankleshwar</option>
                                    <option>Bharuch</option>
                                    <option>Bhavnagar</option>
                                    <option>Bhuj</option>
                                    <option>Gandhinagar</option>
                                    <option>Gir</option>
                                    <option>Jamnagar</option>
                                    <option>Kandla</option>
                                    <option>Porbandar</option>
                                    <option>Rajkot</option>
                                    <option>Surat</option>
                                    <option>Vadodara/Baroda</option>
                                    <option>Valsad</option>
                                    <option>Vapi</option>
                                    <option>Gujarat-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Haryana-</i></font>
                                    </option>
                                    <option>Ambala</option>
                                    <option>Chandigarh</option>
                                    <option>Faridabad</option>
                                    <option>Gurgaon</option>
                                    <option>Hisar</option>
                                    <option>Karnal</option>
                                    <option>Kurukshetra</option>
                                    <option>Panipat</option>
                                    <option>Rohtak</option>
                                    <option>Haryana-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Himachal
                                                Pradesh-</i></font></option>
                                    <option>Dalhousie</option>
                                    <option>Dharmasala</option>
                                    <option>Kulu/Manali</option>
                                    <option>Shimla</option>
                                    <option>Himachal Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Jammu
                                                and Kashmir-</i></font></option>
                                    <option>Jammu</option>
                                    <option>Srinagar</option>
                                    <option>Jammu and Kashmir-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Jharkhand-</i></font>
                                    </option>
                                    <option>Bokaro</option>
                                    <option>Dhanbad</option>
                                    <option>Jamshedpur</option>
                                    <option>Ranchi</option>
                                    <option>Jharkhand-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Karnataka-</i></font>
                                    </option>
                                    <option>Bengaluru/Bangalore</option>
                                    <option>Belgaum</option>
                                    <option>Bellary</option>
                                    <option>Bidar</option>
                                    <option>Dharwad</option>
                                    <option>Gulbarga</option>
                                    <option>Hubli</option>
                                    <option>Kolar</option>
                                    <option>Mangalore</option>
                                    <option>Mysoru/Mysore</option>
                                    <option>Karnataka-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Kerala-</i></font>
                                    </option>
                                    <option>Calicut</option>
                                    <option>Cochin</option>
                                    <option>Ernakulam</option>
                                    <option>Kannur</option>
                                    <option>Kochi</option>
                                    <option>Kollam</option>
                                    <option>Kottayam</option>
                                    <option>Kozhikode</option>
                                    <option>Palakkad</option>
                                    <option>Palghat</option>
                                    <option>Thrissur</option>
                                    <option>Trivandrum</option>
                                    <option>Kerela-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Madhya
                                                Pradesh-</i></font></option>
                                    <option>Bhopal</option>
                                    <option>Gwalior</option>
                                    <option>Indore</option>
                                    <option>Jabalpur</option>
                                    <option>Ujjain</option>
                                    <option>Madhya Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Maharashtra-</i></font>
                                    </option>
                                    <option>Ahmednagar</option>
                                    <option>Aurangabad</option>
                                    <option>Jalgaon</option>
                                    <option>Kolhapur</option>
                                    <option>Mumbai</option>
                                    <option>Mumbai Suburbs</option>
                                    <option>Nagpur</option>
                                    <option>Nasik</option>
                                    <option>Navi Mumbai</option>
                                    <option>Pune</option>
                                    <option>Solapur</option>
                                    <option>Maharashtra-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Manipur-</i></font>
                                    </option>
                                    <option>Imphal</option>
                                    <option>Manipur-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Meghalaya-</i></font>
                                    </option>
                                    <option>Shillong</option>
                                    <option>Meghalaya-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Mizoram-</i></font>
                                    </option>
                                    <option>Aizawal</option>
                                    <option>Mizoram-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Nagaland-</i></font>
                                    </option>
                                    <option>Dimapur</option>
                                    <option>Nagaland-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Orissa-</i></font>
                                    </option>
                                    <option>Bhubaneshwar</option>
                                    <option>Cuttak</option>
                                    <option>Paradeep</option>
                                    <option>Puri</option>
                                    <option>Rourkela</option>
                                    <option>Orissa-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Punjab-</i></font>
                                    </option>
                                    <option>Amritsar</option>
                                    <option>Bathinda</option>
                                    <option>Chandigarh</option>
                                    <option>Jalandhar</option>
                                    <option>Ludhiana</option>
                                    <option>Mohali</option>
                                    <option>Pathankot</option>
                                    <option>Patiala</option>
                                    <option>Punjab-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Rajasthan-</i></font>
                                    </option>
                                    <option>Ajmer</option>
                                    <option>Jaipur</option>
                                    <option>Jaisalmer</option>
                                    <option>Jodhpur</option>
                                    <option>Kota</option>
                                    <option>Udaipur</option>
                                    <option>Rajasthan-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Sikkim-</i></font>
                                    </option>
                                    <option>Gangtok</option>
                                    <option>Sikkim-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Tamil
                                                Nadu-</i></font></option>
                                    <option>Chennai</option>
                                    <option>Coimbatore</option>
                                    <option>Cuddalore</option>
                                    <option>Erode</option>
                                    <option>Hosur</option>
                                    <option>Madurai</option>
                                    <option>Nagerkoil</option>
                                    <option>Ooty</option>
                                    <option>Salem</option>
                                    <option>Thanjavur</option>
                                    <option>Tirunalveli</option>
                                    <option>Trichy</option>
                                    <option>Tuticorin</option>
                                    <option>Vellore</option>
                                    <option>Tamil Nadu-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Tripura-</i></font>
                                    </option>
                                    <option>Agartala</option>
                                    <option>Tripura-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Union
                                                Territories-</i></font></option>
                                    <option>Chandigarh</option>
                                    <option>Dadra & Nagar Haveli-Silvassa</option>
                                    <option>Daman & Diu</option>
                                    <option>Delhi</option>
                                    <option>Pondichery</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Uttar
                                                Pradesh-</i></font></option>
                                    <option>Agra</option>
                                    <option>Aligarh</option>
                                    <option>Allahabad</option>
                                    <option>Bareilly</option>
                                    <option>Faizabad</option>
                                    <option>Ghaziabad</option>
                                    <option>Gorakhpur</option>
                                    <option>Kanpur</option>
                                    <option>Lucknow</option>
                                    <option>Mathura</option>
                                    <option>Meerut</option>
                                    <option>Moradabad</option>
                                    <option>Noida</option>
                                    <option>Varanasi/Banaras</option>
                                    <option>Uttar Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Uttaranchal-</i></font>
                                    </option>
                                    <option>Dehradun</option>
                                    <option>Roorkee</option>
                                    <option>Uttaranchal-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-West
                                                Bengal-</i></font></option>
                                    <option>Asansol</option>
                                    <option>Durgapur</option>
                                    <option>Haldia</option>
                                    <option>Kharagpur</option>
                                    <option>Kolkatta</option>
                                    <option>Siliguri</option>
                                    <option>West Bengal - Other</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="destination" id="destination" class="form-control"
                                        data-rule-required="true">
                                    <option value="">--Choose Destination--</option>
                                    <option>Ahmedabad</option>
                                    <option>Bengaluru/Bangalore</option>
                                    <option>Chandigarh</option>
                                    <option>Chennai</option>
                                    <option>Delhi</option>
                                    <option>Gurgaon</option>
                                    <option>Hyderabad/Secunderabad</option>
                                    <option>Kolkatta</option>
                                    <option>Mumbai</option>
                                    <option>Noida</option>
                                    <option>Pune</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Andhra
                                                Pradesh-</i></font></option>
                                    <option>Anantapur</option>
                                    <option>Guntakal</option>
                                    <option>Guntur</option>
                                    <option>Hyderabad/Secunderabad</option>
                                    <option>kakinada</option>
                                    <option>kurnool</option>
                                    <option>Nellore</option>
                                    <option>Nizamabad</option>
                                    <option>Rajahmundry</option>
                                    <option>Tirupati</option>
                                    <option>Vijayawada</option>
                                    <option>Visakhapatnam</option>
                                    <option>Warangal</option>
                                    <option>Andra Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Arunachal
                                                Pradesh-</i></font></option>
                                    <option>Itanagar</option>
                                    <option>Arunachal Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Assam-</i></font>
                                    </option>
                                    <option>Guwahati</option>
                                    <option>Silchar</option>
                                    <option>Assam-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Bihar-</i></font>
                                    </option>
                                    <option>Bhagalpur</option>
                                    <option>Patna</option>
                                    <option>Bihar-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Chhattisgarh-</i></font>
                                    </option>
                                    <option>Bhillai</option>
                                    <option>Bilaspur</option>
                                    <option>Raipur</option>
                                    <option>Chhattisgarh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Goa-</i></font>
                                    </option>
                                    <option>Panjim/Panaji</option>
                                    <option>Vasco Da Gama</option>
                                    <option>Goa-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Gujarat-</i></font>
                                    </option>
                                    <option>Ahmedabad</option>
                                    <option>Anand</option>
                                    <option>Ankleshwar</option>
                                    <option>Bharuch</option>
                                    <option>Bhavnagar</option>
                                    <option>Bhuj</option>
                                    <option>Gandhinagar</option>
                                    <option>Gir</option>
                                    <option>Jamnagar</option>
                                    <option>Kandla</option>
                                    <option>Porbandar</option>
                                    <option>Rajkot</option>
                                    <option>Surat</option>
                                    <option>Vadodara/Baroda</option>
                                    <option>Valsad</option>
                                    <option>Vapi</option>
                                    <option>Gujarat-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Haryana-</i></font>
                                    </option>
                                    <option>Ambala</option>
                                    <option>Chandigarh</option>
                                    <option>Faridabad</option>
                                    <option>Gurgaon</option>
                                    <option>Hisar</option>
                                    <option>Karnal</option>
                                    <option>Kurukshetra</option>
                                    <option>Panipat</option>
                                    <option>Rohtak</option>
                                    <option>Haryana-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Himachal
                                                Pradesh-</i></font></option>
                                    <option>Dalhousie</option>
                                    <option>Dharmasala</option>
                                    <option>Kulu/Manali</option>
                                    <option>Shimla</option>
                                    <option>Himachal Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Jammu
                                                and Kashmir-</i></font></option>
                                    <option>Jammu</option>
                                    <option>Srinagar</option>
                                    <option>Jammu and Kashmir-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Jharkhand-</i></font>
                                    </option>
                                    <option>Bokaro</option>
                                    <option>Dhanbad</option>
                                    <option>Jamshedpur</option>
                                    <option>Ranchi</option>
                                    <option>Jharkhand-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Karnataka-</i></font>
                                    </option>
                                    <option>Bengaluru/Bangalore</option>
                                    <option>Belgaum</option>
                                    <option>Bellary</option>
                                    <option>Bidar</option>
                                    <option>Dharwad</option>
                                    <option>Gulbarga</option>
                                    <option>Hubli</option>
                                    <option>Kolar</option>
                                    <option>Mangalore</option>
                                    <option>Mysoru/Mysore</option>
                                    <option>Karnataka-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Kerala-</i></font>
                                    </option>
                                    <option>Calicut</option>
                                    <option>Cochin</option>
                                    <option>Ernakulam</option>
                                    <option>Kannur</option>
                                    <option>Kochi</option>
                                    <option>Kollam</option>
                                    <option>Kottayam</option>
                                    <option>Kozhikode</option>
                                    <option>Palakkad</option>
                                    <option>Palghat</option>
                                    <option>Thrissur</option>
                                    <option>Trivandrum</option>
                                    <option>Kerela-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Madhya
                                                Pradesh-</i></font></option>
                                    <option>Bhopal</option>
                                    <option>Gwalior</option>
                                    <option>Indore</option>
                                    <option>Jabalpur</option>
                                    <option>Ujjain</option>
                                    <option>Madhya Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Maharashtra-</i></font>
                                    </option>
                                    <option>Ahmednagar</option>
                                    <option>Aurangabad</option>
                                    <option>Jalgaon</option>
                                    <option>Kolhapur</option>
                                    <option>Mumbai</option>
                                    <option>Mumbai Suburbs</option>
                                    <option>Nagpur</option>
                                    <option>Nasik</option>
                                    <option>Navi Mumbai</option>
                                    <option>Pune</option>
                                    <option>Solapur</option>
                                    <option>Maharashtra-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Manipur-</i></font>
                                    </option>
                                    <option>Imphal</option>
                                    <option>Manipur-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Meghalaya-</i></font>
                                    </option>
                                    <option>Shillong</option>
                                    <option>Meghalaya-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Mizoram-</i></font>
                                    </option>
                                    <option>Aizawal</option>
                                    <option>Mizoram-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Nagaland-</i></font>
                                    </option>
                                    <option>Dimapur</option>
                                    <option>Nagaland-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Orissa-</i></font>
                                    </option>
                                    <option>Bhubaneshwar</option>
                                    <option>Cuttak</option>
                                    <option>Paradeep</option>
                                    <option>Puri</option>
                                    <option>Rourkela</option>
                                    <option>Orissa-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Punjab-</i></font>
                                    </option>
                                    <option>Amritsar</option>
                                    <option>Bathinda</option>
                                    <option>Chandigarh</option>
                                    <option>Jalandhar</option>
                                    <option>Ludhiana</option>
                                    <option>Mohali</option>
                                    <option>Pathankot</option>
                                    <option>Patiala</option>
                                    <option>Punjab-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Rajasthan-</i></font>
                                    </option>
                                    <option>Ajmer</option>
                                    <option>Jaipur</option>
                                    <option>Jaisalmer</option>
                                    <option>Jodhpur</option>
                                    <option>Kota</option>
                                    <option>Udaipur</option>
                                    <option>Rajasthan-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Sikkim-</i></font>
                                    </option>
                                    <option>Gangtok</option>
                                    <option>Sikkim-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Tamil
                                                Nadu-</i></font></option>
                                    <option>Chennai</option>
                                    <option>Coimbatore</option>
                                    <option>Cuddalore</option>
                                    <option>Erode</option>
                                    <option>Hosur</option>
                                    <option>Madurai</option>
                                    <option>Nagerkoil</option>
                                    <option>Ooty</option>
                                    <option>Salem</option>
                                    <option>Thanjavur</option>
                                    <option>Tirunalveli</option>
                                    <option>Trichy</option>
                                    <option>Tuticorin</option>
                                    <option>Vellore</option>
                                    <option>Tamil Nadu-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Tripura-</i></font>
                                    </option>
                                    <option>Agartala</option>
                                    <option>Tripura-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Union
                                                Territories-</i></font></option>
                                    <option>Chandigarh</option>
                                    <option>Dadra & Nagar Haveli-Silvassa</option>
                                    <option>Daman & Diu</option>
                                    <option>Delhi</option>
                                    <option>Pondichery</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Uttar
                                                Pradesh-</i></font></option>
                                    <option>Agra</option>
                                    <option>Aligarh</option>
                                    <option>Allahabad</option>
                                    <option>Bareilly</option>
                                    <option>Faizabad</option>
                                    <option>Ghaziabad</option>
                                    <option>Gorakhpur</option>
                                    <option>Kanpur</option>
                                    <option>Lucknow</option>
                                    <option>Mathura</option>
                                    <option>Meerut</option>
                                    <option>Moradabad</option>
                                    <option>Noida</option>
                                    <option>Varanasi/Banaras</option>
                                    <option>Uttar Pradesh-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-Uttaranchal-</i></font>
                                    </option>
                                    <option>Dehradun</option>
                                    <option>Roorkee</option>
                                    <option>Uttaranchal-Other</option>
                                    <option disabled="disabled" style="background-color:lightgoldenrodyellow"><font
                                                color="#FFFFFF"><i>-West
                                                Bengal-</i></font></option>
                                    <option>Asansol</option>
                                    <option>Durgapur</option>
                                    <option>Haldia</option>
                                    <option>Kharagpur</option>
                                    <option>Kolkatta</option>
                                    <option>Siliguri</option>
                                    <option>West Bengal - Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <a onclick="searchbus()" class="w3ls-login search">Search Buses</a>
                        </div>

                        <div class="features-w3lleft">

                        </div>
                        <div class=""></div>
                        <div class="features-w3lright">


                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //banner-text -->
        <!-- arrow bounce -->
        <div class="agileits-arrow bounce animated"><a href="#welcome" class="scroll"><i class="fa fa-angle-down"
                                                                                         aria-hidden="true"></i></a>
        </div>
        <!-- //arrow bounce -->
    </div>
</div>
<!-- //banner -->
<!-- features -->
<div id="output">
    <div class="features">
        <div class="container">
            <div class="wthree-features-row">
                <div class="col-md-6 features-w3grid">
                    <div class="features-row2">
                        <div class="features-w3lleft">
                            <h4>New User</h4>
                            <p>Register here to become a member</p>
                        </div>
                        <div class="features-w3lright">
                            <a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2">Register</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 features-w3grid">
                    <div class="features-row2">
                        <div class="features-w3lleft">
                            <h4>Already a Member </h4>
                            <p>Please login in here</p>
                        </div>
                        <div class="features-w3lright">
                            <a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Login</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //features -->

    <!-- welcome -->
    <div class="welcome" id="welcome">
        <div class="container">
            <div class="agileits-title">
                <h3>Who We Are</h3>
            </div>
            <div class="welcomerow-agileinfo">
                <h5>Miles of smiles! Always going your way!</h5>
                <p>"Excure is a trusted online bus ticketing platform
                    with an ample sale of Bus tickets via secured website,
                    and our bus agents. Our's is an upcoming online bus ticket booking platform which will provide a
                    direct insight to
                    the buses that operate under us.We are expanding our horizon to cover all possible
                    routes and provide an excellent customer service.<br>
                    Try the Excure experience today."</p>
            </div>
            <div class="w3-welcome-grids">
                <h1 class="text-center"><br><br>We Promise To Deliver</h1>
                <div class="col-md-3 col-xs-6 w3l-welcome-grid">
                    <img src="images/maximum_choices.png" alt=" " width="50%" class="img-responsive center"/>
                    <div class="agileits-welcome-info">
                        <h4>Maximum Choice</h4>
                        <p>We give you the widest number of travel options across routes </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 w3l-welcome-grid">
                    <img width="95" src="images/customer_care.png" alt=" " class="img-responsive center"/>
                    <div class="agileits-welcome-info">
                        <h4>Superior Service </h4>
                        <p>We put our experience and relationships to good use and are available to solve your travel
                            issues.</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 w3l-welcome-grid">
                    <img src="images/lowest_Fare.png" alt=" " width="50%" class="img-responsive center"/>
                    <div class="agileits-welcome-info">
                        <h4>Lowest Price</h4>
                        <p>We always give you the lowest price with the best partner offers.</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 w3l-welcome-grid">
                    <img src="images/benefits.png" alt=" "  width="50%"class="img-responsive center"/>
                    <div class="agileits-welcome-info">
                        <h4>Unmatched Benefits</h4>
                        <p>We take care of your travel beyond ticketing by providing you with innovative and unique
                            benefits. </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- video -->
    <div class="video-agileits jarallax">
        <div class="video">
            <div class="container">
                <div class="col-md-6 video-left">
                    <div class="agileits-title title2">
                        <h3>About Us</h3>
                    </div>
                    <h4>A User guide to your bookings. </h4>
                    <h4>Because we promise to be your best tarvel partner. </h4>
                    <p style="color:white">We connect you across various cities with the click of a button.
                        We provide bus travellers, an uncomplicated and hassle-free booking experience.
                        Choose your destination, view the seat layout, choose convenient seats, and book your ticket in just a few clicks!</p>
                    <!-- Stats -->
                    <div class="stats-info agileits-w3layouts">
                        <div class="col-sm-4 col-xs-4 stats-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5000' data-delay='.5' data-increment="4">5000</div>
                            <h6>Routes</h6>
                        </div>
                        <div class="col-sm-4 col-xs-4 stats-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='500' data-delay='6' data-increment="1">500</div>
                            <h6>Companies</h6>
                        </div>
                        <div class="col-sm-4 col-xs-4 stats-grid">
                            <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='225' data-delay='8' data-increment="1">225</div>
                            <h6>Users</h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //Stats -->
                </div>
                <div class="col-md-6 video-right">
                    <a class="play-icon popup-with-zoom-anim" href="#myModal3" data-toggle="modal">
                        <span class="fa fa-play"> </span>
                    </a>
                    <!-- footer modal -->
                    <div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                   <video controls muted width="100%" height="200%">
                                       <source src="images/ice_video_20180720-150132.webm">
                                   </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //footer modal -->
                </div>
            </div>
        </div>
    </div>
    <!-- //video -->

    <!-- services -->
    <div class="services">
        <div class="container">
            <div class="agileits-title">
                <h3>Companies</h3>
            </div>
            <div class="services-w3lsrow">
                <?php
                include 'connection.php';
                $company = "select * from companies order by id desc LIMIT 0,4";
                $company_result = mysqli_query($con, $company);
                while ($company_row = mysqli_fetch_array($company_result)) {
                    ?>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-grids">
                        <img src="<?php echo $company_row['logo'] ?>"  class="center img-circle img-responsive">
                        <h4><?php echo $company_row['companyname'] ?></h4>
                        <p><?php echo $company_row['description'] ?></p>
                    </div>
                    <?php
                }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //services -->
</div>
<?php
include "footer.php";
?>
</body>
</html>