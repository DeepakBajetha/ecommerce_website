<?php include 'includes/common.php';
if(isset($_SESSION['email'])){
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle</title>
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
        <div id="banner-image"><center>
            <div class="container">
                <div class="banner-content">
                    <h1>We sell Lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                
            </div></center>
        </div>
            <div class="container">
                <div class="row ">
                    <div class="col-xs-4">
                        <div class="thumbnail text-center">
                    <a href="#">
                        <img src="img/camera.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                    </div>
                    </div>
                 <div class="col-xs-4">
                     <div class="thumbnail text-center">
                    <a href="#">
                        <img src="img/watch.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </a>
                     </div></div>
                 <div class="col-xs-4">
                     <div class="thumbnail text-center">
                    <a href="#">
                        <img src="img/shirt.jpg" alt="" class="img-responsive">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirt.</p>
                        </div>
                    </a>
                </div>                
            </div>
            </div>
            </div>
<?php include "includes/footer.php";?>
    </body>
</html>
