<?php
include "connection.php";
@session_start();
$id = $_REQUEST["q"];
$select = "select * from buses where id=$id";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_array($result);
$doj = $_SESSION['doj'];
$source = $_SESSION['source'];
$des = $_SESSION['destination'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <?php
    include "headerFiles.html";
    ?>

</head>
<body>
<?php

if (isset($_SESSION["user_email"])) {
    include "userheader.php";
} else {
    include 'publicheader.php';
    $email = '';
}
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <div class="col-md-12 features-w3grid">
            <div class="features-row2">
                <div class="col-sm-2"><h4>Book a Ticket</h4>
                </div>
                <div class="col-sm-8">
                    <div class="col-sm-4"><input type="text" name="doj" id="doj" value="<?php echo $doj ?>"
                                                 data-rule-required="true" data-msg-required="*Required."
                                                 placeholder="Date of journey" class="form-control dtp">
                    </div>
                    <div class="col-sm-4">
                        <select name="source" id="source" class="form-control" data-rule-required="true">
                            <option><?php echo $source ?></option>
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
                        <select name="destination" id="destination" class="form-control" data-rule-required="true">
                            <option><?php echo $des ?></option>
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
</div>
</div>
<br>
<br>
<div id="output">
    <div class="agileits-title">
        <h3 class="text-center"> <?php echo $row[1]; ?></h3>
    </div>
    <div class="container">
        <div class="roiw">
            <div class=" col-md-6">

                <table class="table">
                    <th class="text-center book">Bus Details</th>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-record">
                                Registration-Number:&nbsp;<?php echo $row[2]; ?></h5></td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-piggy-bank">
                                Price:&nbsp;<?php echo $row[3]; ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-road">
                                Bus-Type:&nbsp;<?php echo $row[11]; ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-time">
                                Departure-Time:&nbsp;<?php echo $row[10]; ?></h5></td>
                    </tr>

                </table>

            </div>
            <div class=" col-md-6">

                <table class="table">
                    <th class="text-center book">Driver Details</th>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-user">
                                Driver-Name:&nbsp;<?php echo $row[5]; ?></h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-phone">
                                Driver-Mobile:&nbsp;<?php echo $row[6]; ?></h5></td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-phone">
                                Mobile:&nbsp;<?php echo $row[4]; ?></h5></td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5 class="glyphicon glyphicon-phone-alt">
                                Emergency-Contact:&nbsp;<?php echo $row[22]; ?></h5></td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <th colspan="2" class="text-center book" style="font-size:20px ">Amenties</th>
                    <tr>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-fire">&nbsp;Fire-Extinguisher:&nbsp;
                                <?php
                                if ($row[19] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-flash">&nbsp;Charging-Point:&nbsp;
                                <?php
                                if ($row[15] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-tint">&nbsp;Water:&nbsp;
                                <?php
                                if ($row[13] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-tower">&nbsp;Heater:&nbsp;
                                <?php
                                if ($row[17] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-lamp">&nbsp;Reading-Light:&nbsp;
                                <?php
                                if ($row[16] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-warning-sign">&nbsp;Emergency-Exit:&nbsp;
                                <?php
                                if ($row[18] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-pawn">&nbsp;Hammer:&nbsp;
                                <?php
                                if ($row[20] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-facetime-video">&nbsp;CCTV:&nbsp;
                                <?php
                                if ($row[21] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-qrcode">&nbsp;M-Ticket:&nbsp;
                                <?php
                                if ($row[12] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                        <td class="text-center">
                            <h5 class="glyphicon glyphicon-align-justify">&nbsp;Blanket:&nbsp;
                                <?php
                                if ($row[14] == 'yes') {
                                    ?>
                                    <h5 class='glyphicon glyphicon-ok'></h5>

                                <?php } else { ?>
                                    <h5 class='glyphicon glyphicon-remove'></h5>
                                <?php }
                                ?>
                            </h5>
                        </td>
                    </tr>
                </table>
                <div class="container">
                    <h2 class="text-center book">Select Your Seat</h2>
                    <div class="col-sm-7">
                        <table class="table">

                            <h3 class="text-center"><br>Front</h3>

                            <?php
                            $k = 1;
                            global $ar;


                            function checkva($seatnum, $id, $doj)
                            {
                                $bookedseats = '';
                                $con = mysqli_connect("localhost", "root", null, "redbus");
                                $book = "select * from booking where busid='$id' and doj='$doj'";
                                //echo $book;
                                $result = mysqli_query($con, $book);
                                while ($row = mysqli_fetch_array($result)) {
                                    $bookedseats .= $row[6] . ",";
                                    //echo $bookedseats;
                                }
                                $ar = explode(',', $bookedseats);
                                $rt = "";
                                foreach ($ar as $x) {
                                    if ($x == $seatnum) {
                                        $rt = "disabled";
                                    }
                                }
                                return $rt;
                            }

                            //echo checkva('34', 16, '27-Jul-2018 Friday');
                            for ($i = 1; $i <= 12; $i++) { //for rows
                                ?>
                                <tr>
                                    <th><?php echo $i; ?></th>
                                    <?php
                                    for ($j = 0; $j < 6; $j++) { //for columns
                                        if ((($j == 2 || $j == 3) && $i != 12)) {
                                            ?>
                                            <td>&nbsp;</td>
                                            <?php
                                        } else {
                                            if (($i == 6 && $j == 5) || ($i == 7 && $j == 5) || ($i == 6 && $j == 4) || ($i == 7 && $j == 4)) {
                                                ?>
                                                <td>&nbsp;</td>
                                                <?php

                                            } else {
                                                ?>
                                                <td><input type="button"
                                                           class="btn <?php if (checkva($k, $id, $doj) == 'disabled') {
                                                               echo "btn-danger";
                                                           } else {
                                                               echo "btn-success";
                                                           } ?>" <?php echo checkva($k, $id, $doj); ?>
                                                           id="<?php echo $k; ?>"
                                                           onclick="chooseseats(this,<?php echo $id; ?>,<?php echo $row['price'] ?>)"
                                                           value="<?php echo $k; ?>">
                                                </td>
                                                <?php
                                                $k++;
                                            }
                                        }
                                    }
                                    ?>

                                </tr>
                                <?php

                            }


                            ?>
                        </table>
                    </div>
                    <div class="col-sm-5">
                        <h3 class="text-center"><br>Seat Detail</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-4"><input type="button" value="&nbsp;"
                                                                         class="btn btn-success"></div>
                            <div class="col-sm-7">Available</div>
                            <br><br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-4"><input type="button" value="&nbsp;"
                                                                         class="btn btn-danger"></div>
                            <div class="col-sm-7">Booked</div>
                            <br><br><br>
                        </div>
                        <div class="row">
                            <div class="col-sm-1 col-sm-offset-4"><input type="button" value="&nbsp;"
                                                                         class="btn btn-info"></div>
                            <div class="col-sm-7">Selected</div>
                            <br><br><br>
                        </div>
                        <div class="row">
                            <input type="hidden" name="useremail" value="<?php echo $email; ?>" id="useremail">
                            <input type="hidden" name="busid" value="<?php echo $id; ?>" id="busid">
                            <div id="selectedseats">
                                <?php
                                if (isset($_REQUEST['er'])) {
                                    echo "<div  class='alert alert-success text-center'>Thank You for Booking with us</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>
