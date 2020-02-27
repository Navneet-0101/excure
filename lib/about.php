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
include 'connection.php';
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.php">Home</a> /About Us</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

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
                <?php

                $bus="select * from buses order  by id DESC LIMIT 0,4";
                $bus_result=mysqli_query($con,$bus);
                while ($bus_row=mysqli_fetch_array($bus_result)) {
                    ?>
                    <div class="col-md-3 col-xs-6 w3l-welcome-grid">
                        <img src="<?php echo $bus_row[''] ?>" alt=" " class="img-responsive"/>
                        <div class="agileits-welcome-info">
                            <h4><?php echo $bus_row[''] ?></h4>
                            <p><?php echo $bus_row[''] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="clearfix"> </div>
            </div>
            <!-- team -->
            <div id="team" class="team">
                <div class="container">
                    <div class="agileits-title">
                        <h3>Top Operators</h3>
                    </div>
                    <div class="teamw3-agileinfo">
                        <?php
                        $company = "select * from companies order by id ASC LIMIT 0,4";
                        $company_result = mysqli_query($con, $company);
                        while ($company_row = mysqli_fetch_array($company_result)) {
                            ?>
                            <div class="col-md-3 col-xs-6 team-wthree-grid">
                                <div class="btm-right">
                                    <img src="<?php echo $company_row['logo'] ?>" style="height: 200px;" class="img-responsive"  alt=""/>
                                    <div class="social-w3licon captn-icon">
                                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                                    </div>

                                    <div class="captn">
                                        <h4><?php echo $company_row['companyname'] ?></h4>
                                    </div>
                                </div>
                                <div class="agileits-welcome-info">
                                    <p><?php echo $company_row['description'] ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="clearfix"> </div>

                    </div>
                </div>
            </div>
            <!-- //team -->
		</div>
	</div>
	<!-- //welcome -->

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
<?php
include "footer.php";
?>
</body>
</html>