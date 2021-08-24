<?php require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
$user_id=$_GET['id'];
$query="update users_items set  status='Confirmed' where user_id='$user_id' ";
mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
                                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class='container '>
        <h1 class="text jumbotron">Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</h1>
        </div>
        </body>
</html>


