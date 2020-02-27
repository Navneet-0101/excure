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
        label, h4 {
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<body class="bus">
<?php
include_once "companyheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> / Add Buses</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<!--<h1 class="text-center">Add Buses</h1>-->
<div class="container">
    <div class="col-md-8 col-md-offset-2 bus">
        <form action="savebuses.php" method="post">
            <h4 class="text-center" style="font-style:italic">Bus Details</h4>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Bus Name</label>
                    <input type="text" name="tbbusname" id="tbbusname" class="form-control"
                           data-rule-required="true" data-msg-required="Bus Name is required.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" name="tbregno" id="tbregno" class="form-control"
                           data-rule-required="true" data-msg-required="Reg.No. is required.">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="tbmob" id="tbmob" class="form-control"
                           data-rule-required="true" data-msg-required="Mobile is required."
                    data-rule-number="true" minlength="10" maxlength="10">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="tbprice" id="tbprice" class="form-control"
                           data-rule-required="true" data-msg-required="Price is required.">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Source City</label>
                    <select name="SourceCity" class="form-control" data-rule-required="true">
                        <option value="">--Choose--</option>
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
            <div class="col-md-6">
                <div class="form-group">
                    <label>Destination City</label>
                    <select name="DestinationCity" class="form-control" data-rule-required="true">
                        <option value="">--Choose--</option>
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
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Days of Working</label>
                        <select id="tbdays" name="tbdays[]" data-rule-required="true" class="form-control"
                                data-msg-required="*Required" multiple>
                            <option value="">Select Days</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Departure Time</label>
                        <input type="time" name="tbtime" id="tbtime" class="form-control"
                               data-rule-required="true" data-msg-required="*Required">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Bus Type</label>
                        <select id="tbtype" name="tbtype" data-rule-required="true" class="form-control"
                                data-msg-required="*Required" >
                            <option value="">Select Bus Type</option>

                            <option value="ordinary">Ordinary</option>
                            <option value="integralcoach">Integral Coach</option>
                            <option value="acseatersleeper">AC Seater/Sleeper</option>
                            <option value="nonacseatersleeper">Non AC Seater/sleeper</option>
                            <option value="acsleeper">AC Sleeper</option>
                            <option value="nonacsleeper">Non AC Sleeper</option>
                            <option value="volvoacsleeper">Volvo AC Sleeper</option>
                            <option value="volvoacsemisleeper">Volvo AC Semi Sleeper</option>
                            <option value="m1acsleeper">Mercedes First Class AC Sleeper</option>
                        </select>
                    </div>
                </div>
            </div>
            <h4 class="text-center" style="font-style:italic">Driver Details</h4>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Driver Name</label>
                    <input type="text" name="tbdrivername" id="tbdrivername" class="form-control"
                           data-rule-required="true" data-msg-required="Driver Name is required.">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Driver Mobile Number</label>
                    <input type="text" name="tbdrivermob" id="tbdrivermob" class="form-control"
                           data-rule-required="true" data-msg-required="Driver Mobile Number is required."
                           data-rule-number="true" minlength="10" maxlength="10">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Emergency Number</label>
                    <input type="text" name="tbemerno" id="tbemerno" class="form-control"
                           data-rule-required="true" data-msg-required="Emergency Contact is required."
                    data-rule-number="true" minlength="10" maxlength="10">
                </div>
            </div>
            <h4 class="text-center" style="font-style:italic">Bus Facilities</h4>
            <div class="col-md-4    ">
                <div class="form-group">
                    <label>MTicket</label>
                    <input type="radio" checked name="tbticket" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbticket" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>CCTV</label>
                    <input type="radio" checked name="tbcctv" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbcctv" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label>Heater</label>
                    <input type="radio" checked name="tbheater" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbheater" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Hammer</label>
                    <input type="radio" checked name="tbhammer" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbhammer" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Blanket</label>
                    <input type="radio" checked name="tbblanket" id="tbyes" value="yes"
                           data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbblanket" id="tbno" value="no"
                           data-rule-required="true"><label>No</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Water</label>
                    <input type="radio" checked name="tbwaterbottle" id="tbyes" value="yes"
                           data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbwaterbottle" id="tbno" value="no"
                           data-rule-required="true"><label>No</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Reading Light</label>
                    <input type="radio" checked name="tbreading" id="tbyes" value="yes"
                           data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbreading" id="tbno" value="no"
                           data-rule-required="true"><label>No</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Emergency Exit</label>
                    <input type="radio" checked name="tbexit" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbexit" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fire Extinguisher</label>
                    <input type="radio" checked name="tbfire" id="tbyes" value="yes" data-rule-required="true"><label>Yes</label>
                    <input type="radio" name="tbfire" id="tbno" value="no" data-rule-required="true"><label>No</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Charging Point</label>
                    <input type="radio" checked name="tbcharging" id="tbyes" value="yes" data-rule-required="true"
                           data-msg-required="*"><label>Yes</label>
                    <input type="radio" name="tbcharging" id="tbno" value="no"
                           data-rule-required="true"><label>No</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" value="Add Bus" class="btn btn-primary btn-block">
                    <?php
                    if(isset($_REQUEST["msg"]))
                    {
                        if ($_REQUEST["msg"]==1)
                        {
                            echo "<div class='alert alert-success'><strong>Insert Successful.</strong></div>";
                        }
                        elseif($_REQUEST["msg"]==0)
                        {
                            echo "<div class='alert alert-danger'><strong>Insert Failed.</strong></div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'><strong>Bus already exist.</strong></div>";
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="reset" value="Reset Data" class="btn btn-primary btn-block">
                </div>
            </div>
            <!--            <h6 class="text-center" style="font-style:italic">*&nbsp;These fields are required.</h6>-->
        </form>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>