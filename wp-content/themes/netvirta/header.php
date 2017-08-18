<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Netvirta</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body class="cbp-spmenu-push">
	
<div class="page-wrapper">
    <nav class="mobile-nav cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <div class="menu-close">
            <button type="button" class="close-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-1"></span>
                <span class="icon-bar icon-bar-2"></span>
                <span class="icon-bar icon-bar-3"></span>
            </button>
        </div>
        <div class="menu-holder">
                <?php wp_nav_menu( array('menu' => 'Primary','menu_class' => 'primary-menu nav navbar-nav navbar-nav-menu navbar-right')); ?>
                <?php wp_nav_menu( array('menu' => 'Utility','menu_class' => 'utility-menu nav navbar-nav navbar-nav-menu navbar-right')); ?>
        </div>
    </nav>
    <nav class="navbar navbar-default navbar-home">
        <div class="container p-0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-holder afterclear">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" id="showRight">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php the_field('logo', 'option'); ?>" alt="Netvirta Logo" class="img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-main-menu afterclear">
                        <?php wp_nav_menu( array('menu' => 'Primary','menu_class' => 'primary-menu nav navbar-nav navbar-nav-menu navbar-right')); ?>
                        <?php wp_nav_menu( array('menu' => 'Utility','menu_class' => 'utility-menu nav navbar-nav navbar-nav-menu navbar-right')); ?> 
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>