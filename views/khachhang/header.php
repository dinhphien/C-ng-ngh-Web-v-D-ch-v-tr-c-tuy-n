<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!--	<meta charset="utf-8">-->
<!--    <meta name="robots" content="all,follow">-->
<!--    <meta name="googlebot" content="index,follow,snippet,archive">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta name="description" content="Obaju e-commerce template">-->
<!--    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">-->
<!--    <meta name="keywords" content="">-->
	<title>
		TKTP Shop
	</title>
	<meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/header.js"></script>


    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men</a>
                        <ul class="dropdown-menu">
                            <div class="yamm-content">
                                <div class="row">
                                   
                                        <ul>
                                                <li><a href="#">T-shirts</a>
                                                </li>
                                                <li><a href="#">Jackets</a>
                                                </li>
                                                <li><a href="#">Coats</a>
                                                </li>
                                                <li><a href="#">Suits and Vest</a>
                                                </li>
                                                <li><a href="#">Jeans</a>
                                                </li>
                                                <li><a href="#">Pants</a>
                                                </li>


                                                
                                        </ul>
                                    
                                </div>
                            </div>
                        </ul>      
                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Ladies</a>
                        <ul class="dropdown-menu">
                            <div class="yamm-content">
                                <div class="row">
                                   
                                        <ul>
                                                <li><a href="#">Ao Dai</a>
                                                </li>
                                                <li><a href="#">T-shirts</a>
                                                </li>
                                                <li><a href="#">Jackets</a>
                                                </li>
                                                <li><a href="#">Dress</a>
                                                </li>
                                                <li><a href="#">Jeans</a>
                                                </li>
                                                <li><a href="#">Shorts</a>
                                                </li>

                                                
                                        </ul>
                                    
                                </div>
                            </div>
                        </ul>      
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="50">What's new</a>
                        <ul class="dropdown-menu">
                            <div class="yamm-content">
                                <div class="row">
                                    
                                        <ul>
                                                <li><a href="post.html">New-things</a>
                                                </li>
                                                <li><a href="post.html">Sales and Events</a>
                                                </li>
                                                <li><a href="faq.html">Look and Trends</a>
                                                </li>   
                                        </ul>
                                    
                                </div>
                            </div>
                        </ul>      
                    </li>

                    <li class=" dropdown yamm-fw">
                        <a href="blog.php" data-delay="200">Blog post</a>  
                    </li>

                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Help</a>
                        <ul class="dropdown-menu">
                            <div class="yamm-content">
                                <div class="row">
                                   
                                        <ul>
                                                <li><a href="faq.php">FAQ</a>
                                                </li>
                                                
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                                <li><a href="terms and conditions.php">Terms and contditions</a>
                                                </li>
                                               
                                                <li><a href="About us.php">About us</a>
                                                </li>

                                                
                                        </ul>
                                    
                                </div>
                            </div>
                        </ul>      
                    </li>
                
                </ul>

            </div>

            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <?php
                    if(isset($_SESSION['logged_in'])){
                    ?>
                    <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" id="btdangnhap" data-toggle="dropdown" data-hover="dropdown" data-delay="50"><i class="fa fa-user"></i><span class="hidden-sm"></span></a>
                    <ul class="dropdown-menu" style="right:0;">
                        <div class="yamm-content">
                            <div class="row">
                                <ul>
                                    <li><a href="orders-history.php">Orders history</a>
                                    </li>
                                    <li><a href="basket.html">Shopping cart</a>
                                    </li>
                                    <li><a href="customer-wishlist.html">Wishlist</a>
                                    </li>
                                    <li><a href="customer-account.html">My Acount</a>
                                    </li>
                                    <li><a href="index.php">Log out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                        <?php
                    }
                    else {
                        ?>
                        <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="50"><i class="fa fa-user"></i><span class="hidden-sm"></span>Login</a>
                        <ul class="dropdown-menu" style="right:0;">
                            <div class="yamm-content">
                                <div class="row">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                                        </li>
                                        <li><a href="#" data-toggle="modal" data-target="#register-modal">Register</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                        <?php
                    }
                    ?>

                </div>

                <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="Register">Customer Register</h4>
                            </div>
                            <div class="modal-body">
                                <form action="customer-orders.html" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username-registermodal" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password-registermodal" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fullname-registermodal" placeholder="fullname">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email-registermodal" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="mobilephone-registermodal" placeholder="mobilephone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Country-registermodal" placeholder="Country">
                                    </div>

                                    <p class="text-center">
                                        <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Register</button>
                                    </p>

                                </form>

                                <p class="text-center text-muted">Register to get more excited things in our pages</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                    <div class="modal-dialog modal-sm">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="Login">Customer Login</h4>
                            </div>
                            <div class="modal-body">
                                <form >
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username-modal" placeholder="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password-modal" placeholder="password" required>
                                    </div>

                                    <p class="text-center">
                                        <button id="loginbutton" type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                    </p>
                                    <p class="text-center text-muted" id="message_dangnhap"></p>
                                </form>

                                <p class="text-center text-muted">Not registered yet?</p>
                                <p class="text-center text-muted"><a href="#" id="registernow" data-toggle="modal" data-target="#register-modal"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			           <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
    


</body>
</html>
