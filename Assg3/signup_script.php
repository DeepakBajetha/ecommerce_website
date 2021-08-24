<?php
require 'includes/common.php';
$name= mysqli_real_escape_string($con, $_POST['name']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= md5(mysqli_real_escape_string($con, $_POST['pass']));
$contact=$_POST['contact'];
$city= mysqli_real_escape_string($con, $_POST['city']);
$address= mysqli_real_escape_string($con, $_POST['address']);
$query="select * from users where email='$email'";
$result= mysqli_query($con, $query);
if(mysqli_num_rows($result)>0){
    echo 'Email already exists';
}
else{
    $insert_query="INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";
    mysqli_query($con, $insert_query);
        $_SESSION['email']=$email;
    $_SESSION['user_id']= mysqli_insert_id($con);
    header('location:products.php');
}

