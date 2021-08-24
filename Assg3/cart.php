<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
                                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body><br><br><br><br>
<?php include 'includes/headers.php';
$user_id=$_SESSION['user_id']; 
$query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
      echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
}
else{
    $sum=0; 
?>

        <div class="container">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>  </th>
            </tr>
             <?php while($row=mysqli_fetch_array($result)){ ?>
            <tr>
                <td> <?php echo $row[0]; ?></td>
                <td> <?php  echo $row[1]; ?></td>
                <td> <?php echo $row[2]; $sum+=$row[2];?></td>
                <td><a href="cart-remove.php?id={$row['id']}">Remove</a> </td>
            </tr>
             <?php }?>
            <tr>
                <td> </td>
                <td>Total</td>
                <td>Rs <?php echo $sum;?></td>
                <td><a href="success.php?id=<?php echo $_SESSION['user_id'];?>" class="btn btn-primary" method="GET" action="success.php">Confirm Order</a></td>
            </tr>
            </tbody>
        </table>
        </div>
<?php 
}
include "includes/footer.php";?>
    </body>
</html>
