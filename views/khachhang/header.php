<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
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

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
	   <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
           <!--  script here -->

            <div class="col-md-6">
                <ul class=" menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-success" role="button">Login</a>
                    </li>
                    <li><a href="register.php" class="btn btn-success" role="button">Register</a>
                    </li>
                    <li><a href="contact.php" class="btn btn-success" role="button">Contact</a>
                    </li>
                    <li><a href="#" class="btn btn-success" role="button">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username-modal" placeholder="Username">
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

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