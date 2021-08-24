<?php
require 'includes/common.php';
$items_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="DELETE FROM users_items WHERE user_id= '$user_id' and item_id='$items_id' ";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    header("location: cart.php");