<?php include 'includes/common.php';
if(isset($_SESSION['email'])){
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
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
        <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>Sign Up</h1>
                <form  method="POST" action="signup_script.php">
                     <div class="form-group">
                         <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z]{1,20}" required></div>
                         <div class="form-group">
                             <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title=""email" that must be in the following order: characters@characters.domain" required></div>
                          <div class="form-group">
                              <input type="password" name="pass" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required></div>
                          <div class="form-group">
                              <input type="number" name="contact" class="form-control" placeholder="Contact" minlength="10" maxlength="10"></div>
                          <div class="form-group">
                              <input type="text" name="city" class="form-control" placeholder="City"></div>
                         <div class="form-group">
                             <input type="text" name="address" class="form-control" placeholder="Address"></div>
                        <div class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary"></div>
                </form>
            </div>
        </div>
    </div>
<?php include "includes/footer.php";?>
    </body>
</html>
