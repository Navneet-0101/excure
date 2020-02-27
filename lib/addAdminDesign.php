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
</head>
<body>
<?php
include_once "adminheader.php";
?>
<div class="banner-text agileinfo about-bnrtext">
    <div class="container">
        <h2><a href="index.html">Home</a> / Add Admin</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>


<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form action="saveAdmin.php" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" data-rule-required="true" data-msg-required="Enter a valid email" name="tbemail" id="tbemail" class="form-control">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" data-rule-required="true" data-msg-required="Name is required" name="tbname" id="tbname" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" data-rule-required="true" data-msg-required="Password is required" name="tbpass" id="tbpass" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" data-rule-required="true" data-rule-equalto="#tbpass" data-msg-equalto="Password and Confirm Password don't match."
                       data-msg-required="Confirm Password is required" name="tbconpass" id="tbconpass" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" checked value="male" name="tbgender" id="tbmale">Male
                <input type="radio" value="female" name="tbgender" id="tbfemale">Female
            </div>
            <div class="form-group">
            <select id="tbuser" data-rule-required="true" data-msg-required="UserType is required" name="tbuser" class="form-control">
                <option value=" ">Select Usertype</option>
                <option value="admin">Admin</option>
                <option value="subadmin">Sub-Admin</option></select>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
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
                        echo "<div class='alert alert-danger'><strong>email already exist.</strong></div>";
                    }
                }
                ?>


            </div>
        </form>
    </div>

</div>
<?php
include "footer.php";
?>
</body>
</html>