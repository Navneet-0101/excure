<?php
include_once "connection.php";
$id=$_REQUEST["id"];
$s="select * from companies where id='$id'";
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
        <h2><a href="adminhome.php">Home</a> / Edit Company</h2>
    </div>
</div>
<!-- //banner-text -->
</div>
</div>

<h3 class="text-center">Edit Company</h3>
<div class="container">
    <form action="updatecompany.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-group">
            <lable>Id</lable>
            <input type="text" class="form-control" name="tbid" id="tbid" readonly value="<?php echo $id;?>">
        </div>
        <label>Company Name</label>
        <input type="text" name="tbcompanyname" id="tbcompanyname" class="form-control"
                value="<?php echo $row[1]; ?>" data-rule-required="true" data-msg-required="Company name is required">
    </div>
    <div class="form-group">
        <label>Logo</label>
        <input type="file" name="tblogo" id="tblogo"
               value="<img src='<?php echo $row[2]; ?>'>" data-rule-required="true" data-msg-required="Logo is required">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="tbdes" id="tbdes" class="form-control"
                  value="<?php echo $row[3]; ?>" data-rule-required="true" data-msg-required="Description is required"></textarea>
    </div>
        <div class="form-group">
            <label>Proprietor</label>
            <input type="text" name="tbprop" id="tbprop" class="form-control" value="<?php echo $row[4]; ?>"
                   data-rule-required="true" data-msg-required="Proprietor is required.">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="tbmob" id="tbmob" class="form-control" value="<?php echo $row[5]; ?>"
                   data-rule-required="true" data-msg-required="Mobile is required."
                   data-rule-number="true" maxlength="10" minlength="10">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="tbemail" id="tbemail" class="form-control" value="<?php echo $row[6]; ?>"
                   data-rule-required="true" data-msg-required="Email is required.">
        </div>
        <div class="form-group">
            <input type="submit" value="update" class="btn btn-primary">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                if($_REQUEST["msg"]==1)
                { echo "<div class='alert alert-success'><strong>Update Successful.</strong></div>";}
//                elseif($_REQUEST["msg"]==2)
//                    echo "<div class='alert alert-danger text-center'><strong>Email already exists.</strong></div>";
                elseif($_REQUEST["msg"]==3)
                    echo "<div class='alert alert-danger text-center'><strong>Please select jpg or png file only.</strong></div>";
                elseif($_REQUEST["msg"]==4)
                    echo "<div class='alert alert-danger text-center'><strong>Image size must be less than or equal to 100kb.</strong></div>";
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