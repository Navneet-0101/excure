<?php
include_once "connection.php";
$email=$_REQUEST["email"];
$s="select * from admin where email='$email'";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_array($result);
?>
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
        <h2><a href="index.html">Home</a> / Edit Admin</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<h3 class="text-center">Edit Admin</h3>
<div class="container">
    <form action="updateAdmin.php" method="post">
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="tbemail" id="tbemail" class="form-control"
               readonly value="<?php echo $row[0]; ?>" data-rule-required="true" data-msg-required="Email is required">
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="tbname" id="tbname" class="form-control"
               value="<?php echo $row[1]; ?>" data-rule-required="true" data-msg-required="Name is required">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <input type="radio" name="tbgender" id="tbmale" <?php if($row[3]=="male"){echo "checked";} ?> value="male">Male
        <input type="radio" name="tbgender" id="tbfemale" <?php if($row[3]=="female"){echo "checked";} ?> value="female">Female
    </div>
        <div class="form-group">
            <select class="form-control" name="tbuser" id="tbuser"
                    data-rule-required="true" data-msg-required="Usertype is required">
                <option value=" ">Select User Type</option>
                <option value="admin" <?php if($row[4]=="admin"){echo "selected";}?>>Admin</option>
                <option value="subadmin" <?php if($row[4]=="subadmin"){echo "selected";}?>>Sub-Admin</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" value="update" class="btn btn-primary">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                if($_REQUEST["msg"]==1)
                { echo "<div class='alert alert-success'><strong>Update Successful.</strong></div>";}
                else
                { echo "<div class='alert alert-danger'><strong>Update Failed.</strong></div>";}
            }
            ?>
        </div>
    </form>

</div>
<?php
include "footer.php";
?>
</body>
</html>