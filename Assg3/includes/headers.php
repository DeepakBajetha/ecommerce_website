           

<nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                    <div id="mynav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['email'])){
                            ?>
                                       <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                                       <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                                       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
                    
                        <?php } else{
                            ?>
                        <li>
                            <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li>
                        <li>
                            <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                </div>
            </nav>
