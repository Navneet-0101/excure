<?php
//include "headerFiles.html";
//?>
<div class="copy-right">
    <div class="container">
        <p>© 2018 Excure. All rights reserved | Design by <a href="#">Navya & Navneet.</a></p>
    </div>
</div>
<!-- //footer -->
<!-- footer modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/img1.jpg" class="img-responsive" alt="">
                <h5>Cras rutrum iaculis enim</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis
                    felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam
                    mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi
                    et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non
                    convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam
                    pulvinar metus neque, eget porttitor massa vulputate. </p>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_REQUEST['msg'])) {
    $val = $_REQUEST['msg'];
    ?>
    <script>
        $(document).ready(function () {
            if (<?php echo $val?>==5)
            {
                $("#myModal1").modal('show');
                document.getElementById("message").innerHTML = "Invalid Credentials";
            }
        });
    </script>
    <?php
}
?>
<?php
if (isset($_REQUEST['signup'])) {
    $val = $_REQUEST['signup'];
    ?>
    <script>
        $(document).ready(function () {

            $("#myModal2").modal('show');
                if(<?php echo $val ?>==0)
                {
                    document.getElementById("errormsg").innerHTML = "Try again Later";
                    document.getElementById("errormsg").className = "text-center text-danger";
                }
            else if(<?php echo $val ?>==1)
                {
                    document.getElementById("errormsg").innerHTML = "Signup Successful";
                    document.getElementById("errormsg").className = "text-center text-success";
                }
            else if(<?php echo $val ?>==2)
                {
                    document.getElementById("errormsg").innerHTML = "Email ID already exists";
                    document.getElementById("errormsg").className = "text-center text-danger";
                }

        });
    </script>
    <?php
}
?>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                <img src="images/img5.png" class="img-responsive login-img" alt=""/>
                <h4 class="modal-title">Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <h3>Login to your account</h3>
                <div class="register">
                    <form action="checkuserlogin.php" method="post">

                        <input placeholder="Email Address" name="Email" type="email" data-rule-required="true" data-msg-required="Email is required">
                        <input placeholder="Password" name="Password" type="password" data-rule-required="true" data-msg-required="Email is required">
                        <div class="sign-up">
                            <input type="submit" value="Login"/>
                        </div>
                    </form>
                    <div class="text-center text-danger" id="message"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login modal -->
<!-- register modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
                <img src="images/img5.png" class="img-responsive login-img" alt=""/>
                <h4 class="modal-title">Don't Wait, Register now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="modal_body_left modal_body_left1">
                    <h3>Register to your account</h3>
                    <div class="register">
                        <form action="signupaction.php" method="post" id="register">
                            <input placeholder="Name" name="Name" type="text" data-rule-required="true" data-msg-required="Name is required">
                            <input placeholder="Email Address" name="Email" type="email" data-rule-required="true" data-msg-required="Email is required">
                            <input placeholder="Password" name="Password" type="password" data-rule-required="true" data-msg-required="Password is required">
                            <input placeholder="Confirm Password" name="Password" type="password" data-rule-required="true" data-msg-required="Confirm is required">
                            <div class="sign-up">
                                <input type="submit" value="Register"/>
                            </div>
                        </form>
                        <div class="text-center text-danger" id="errormsg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //register modal -->

<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //End-FlexSlider -->
<!-- flexSlider -->
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider1').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<!-- start-smooth-scrolling -->
