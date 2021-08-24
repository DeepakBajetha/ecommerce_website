<?php require 'includes/common.php';
if(isset($_SESSION['email'])){
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
                                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<?php include 'includes/headers.php';?>
        <br><br><br><br>
        <div class="container ">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Login
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>                                
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account? <a href="signup.html">Register</a>
                        </div>
                    </div>
               </div>
            </div>
        </div>
<?php include "includes/footer.php";?>
    </body>
</html>
