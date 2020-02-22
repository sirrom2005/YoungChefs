<?php
define("DOMAIN", 'http://'.$_SERVER['HTTP_HOST']."/YoungChefs/", true);
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php echo LOCAL_CHARSET; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="jamaica,food,cooking,chef,latoya,panton">
    <meta name="description" content="young chefs jamaica’s first competitive reality cooking show featuring children.">
    <meta name="author" content="rohanmorris.info">
    <?php zp_apply_filter('theme_head'); ?>
    <?php printHeadTitle(); ?>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
   

    <!--link rel="stylesheet" href="<?php echo pathurlencode($zenCSS); ?>" type="text/css" /-->
    <link rel="stylesheet" href="<?php echo pathurlencode(dirname(dirname($zenCSS))); ?>/styles.css" type="text/css" />
    <?php //if (class_exists('RSS')) printRSSHeaderLink('Album', getAlbumTitle()); ?>
	<script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">Young Chefs Jamaica</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo (isset($_GET['action']) && $_GET['action']=="about")? "open" : "";?>">
                    <a href="../index.php?action=about">About Us</a>
                </li>
                <li class="<?php echo (isset($page) && $page=="meet")? "open" : "";?>">
                    <a href="../meet-the-chefs.php">Meet The Chefs</a>
                </li>
                <li class="<?php echo (isset($_GET['action']) && $_GET['action']=="sponsors")? "open" : "";?>">
                    <a href="../index.php?action=sponsors">Sponsors</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Episodes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/index.php?action=pilot">Pilot</a></li>
                        <li><a href="/index.php?action=episode-1">Episode 1</a></li>
                        <li><a href="/index.php?action=episode-2">Episode 2</a></li>
                        <li><a href="/index.php?action=episode-3">Episode 3</a></li>
                        <!--li><a href="#">Episodes 4</a></li>
                        <li><a href="#">Episodes 5</a></li>
                        <li><a href="#">Episodes 6</a></li>
                        <li><a href="#">Episodes 7</a></li-->
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown">Gallery<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../index.php?action=videos">Videos</a>
                        </li>
                        <li>
                            <a href="../gallery/">Pictures</a>
                        </li>
                    </ul>
                </li>
               <li class="<?php echo (isset($page) && $page=="recipes")? "open" : "";?>">
                    <a href="../recipes.php">Recipes</a>
                </li>
                <li class="<?php echo (isset($_GET['action']) && $_GET['action']=="contact")? "open" : "";?>">
                    <a href="../index.php?action=contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>