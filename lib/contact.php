<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "headerFiles.html";
    ?>
</head>
<body>
<?php
include "publicheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> /Contact Us</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

	<!-- contact -->
	<div class="contact agileits">
		<div class="container">  
			<div class="agileits-title">
				<h3>Contact Us</h3>
			</div>  
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-form wthree">
					<form action="contact-action.php" method="post">
						<input type="text" name="Name" placeholder="Name" data-rule-required="true" data-msg-required="Name is required.">
						<input class="email" type="email" name="Email" placeholder="Email" data-rule-required="true" data-msg-required="Email is required.">
						<textarea placeholder="Message" name="Message" data-rule-required="true" data-msg-required="Please type a message to send."></textarea>
						<input type="submit" value="SUBMIT">
                        <?php
                        if (isset($_REQUEST['er']))
                        {
                            if ($_REQUEST['er']==1)
                                 echo "<div class='alert alert danger text-center'><strong>Email not sent</strong></div>";
                            else
                                 echo "<div class='alert alert success text-center'><strong>Email sent</strong></div>";
                        }
                        ?>
					</form>
				</div>
				<div class="col-md-4 contact-right wthree">
					<div class="contact-text w3-agileits">
						<h4>GET IN TOUCH :</h4>
						<p><i class="fa fa-map-marker"></i>Thapar Institute of Engineering and Technology,Patiala</p>
						<p><i class="fa fa-phone"></i> Telephone : +9988246191, 8558906750</p>
<!--						<p><i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>-->
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:navneetk998824@gmail.com">navneetk998824@gmail.com</a></p>
						<p><i class="fa fa-envelope-o"></i> Alt Email : <a href="mailto:nandanavya27@gmail.com">nandanavya27@gmail.com</a></p>
					</div>
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact -->  
	<!-- map -->
	<div class="map w3layouts">  
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.8772569191683!2d76.36036401481965!3d30.354438081770624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391028abdad39763%3A0xa7f6232cbef903a4!2sThapar+Institute+of+Engineering+and+Technology+(Deemed+University)!5e0!3m2!1sen!2sin!4v1532067511067" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->   
	<!-- features -->
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
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Already a Member </h4>
							<p>Please sign in here</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Login</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
<?php
include "footer.php";
?>
</body>
</html>