<?php include('./php/setup.php');?>
<?php include_once ('admin/includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="ie9 loading-site no-js">
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="ie8 loading-site no-js">
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="loading-site no-js">
<!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <script>
        (function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);
    </script>
    <link rel="icon" type="image/ico" href="http://placehold.it/16x16" />
    <title><?php echo $page_title.' | '.$site_title;?> </title>
    <!--
     TABLE OF CONTENT
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    [1] head
        [1.1] CSS links
    [2] body
        [2.1] loading animation
        [2.2] NavBar
        [2.3] Main Section
        [2.4] About Section
        [2.5] Services Section
        [2.6] Portfolio Section
        [2.7] Hire Me Section
        [2.8] Contact Section
        [2.9] footer

    ========================================================================
    -->
    <!-- CSS links -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/atvImg.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css"/>
    <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/loading-bar.css" />
    <link rel="stylesheet" href="css/colors/color-ctrl.css" />
    <link id="color" rel="stylesheet" href="css/colors/original-red.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="jsrespond.min.js"></script>
    <![endif]-->
</head>

<body class="overhide">
<!-- ===== Start Loading Animation ===== -->
<div class="color-ctrl">
    <span class="toggler"><i class="fa fa-cog"></i></span>
    <h6>Choose your color scheme</h6>
    <hr>
    <span class="color-box cyan"></span>
    <hr>
    <span class="color-box deep-orange"></span>
    <hr>
    <span class="color-box light-blue"></span>
    <hr>
    <span class="color-box light-green"></span>
    <hr>
    <span class="color-box deep-purple"></span>
    <hr>
    <span class="color-box turquoise"></span>
    <hr>
    <span class="color-box brown"></span>
    <hr>
    <span class="color-box original-red"></span>
</div>
<div class="loading">
</div>
<!-- ===== End loading ===== -->

<!-- ===== Start Navigation Bar ===== -->
<nav id="nav" class="navbar custom-navbar navbar-fixed-top scroll scroll1" style="margin: 0 10px;">
    <div class="container">
        <!-- NAVBAR HEADER -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!-- lOGO TEXT HERE -->
            <a href="index-2.html" class="navbar-brand"><span class="blog-p">B</span>log</a>
        </div>
        <!-- NAVIGATION LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php#home" class="active smoothScroll">Home</a></li>
                <li><a href="index.php#about" class="smoothScroll">About</a></li>
                <li><a href="index.php#services" class="smoothScroll">Services</a></li>
                <li><a href="index.php#portfolio" class="smoothScroll">Portfolio</a></li>
                <li><a href="index.php#testimonials" class="smoothScroll">Testimonials</a></li>
                <li><a href="index.php#blog" class="smoothScroll">Blog</a></li>
                <li><a href="index.php#contact" class="smoothScroll">Contact</a></li>
                <li><a href="admin/" class="smoothScroll btn">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- ===== End Navigation Bar ===== -->
