<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
else{
        $user_id = $_SESSION["user_id"];
        $email = $_SESSION["email"];
        $new_password = md5(mysqli_real_escape_string($con, $_POST["new-password"]));
        $retype_pass = md5(mysqli_real_escape_string($con, $_POST["retype-password"]));
        $old_pass = md5(mysqli_real_escape_string($con, $_POST["old-password"]));
        $check_query="select password from users where id='$user_id' ";
        $res= mysqli_query($con, $check_query);
        $row= mysqli_fetch_array($res)or die(mysqli_error($con));
        if($row['password']==$old_pass){
        if($new_password != $retype_pass){
            echo "The passwords do not match. Try again.";
        }else{
            $query = "UPDATE users SET password = '$new_password' WHERE email = '$email' AND id = '$user_id'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            header("location: setting.php");
        }
        }
        else{
            echo 'The old password is wrong.';
        }
}