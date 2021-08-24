<?php require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
                                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body><br><br><br><br>
<?php include 'includes/headers.php';?>
        <div><div class="row"><div class="col-xs-4 col-xs-offset-4"><h3>Change Password</h3>
                    <form method="POST" action="setting_script.php">
            <div class="form-group">
                <input type="password" name="old-password" placeholder="Old Password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" name="new-password" placeholder="New Password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
            <div class="form-group">
                <input type="password" name="retype-password" placeholder="Re-type New Password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Change" class="btn btn-primary">
            </div>
        </form></div></div></div>
<?php include "includes/footer.php";?>
    </body>
</html>
