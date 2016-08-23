<html>
<head>	
<meta charset="UTF-8">		
<title><?php bloginfo ( 'name' ); ?> | <?php bloginfo('description'); ?></title>	
<meta charset="utf-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>	
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>

<!--Custom stylesheet--><link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.min.css"><!-- Optional theme -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bower_components/Swiper/dist/css/swiper.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/bower_components/animate.css/animate.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/custom.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.min.css"><!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<link rel="icon"  type="image/png" href="<?php bloginfo( 'template_url' ); ?>/img/icon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/bower_components/lightbox2/dist/css/lightbox.min.css">

<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>


<div class="page-wrap">


<header class="header"><div class="container">
<div class="header-outer"><div class="left-header">

<div class="logo">	<a href="<?php bloginfo('url'); ?>">

<img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"></a>	</div></div>	

<div class="right-header">	
<div class="searchbar-wrap"><?php echo get_search_form(); ?></div>		
<div class="phone-manil">			<ul>				<li><span><img src="<?php bloginfo('template_url');?>/img/mobile-icon-new.png" alt=""></span>018 - 14 15 40</li>				<li><a href="mailto:info@ufs.nu"><span><img src="<?php bloginfo('template_url');?>/img/msg.png" alt=""></span>info@ufs.se</a></li>			</ul>	</div>	

<div class="clearflix"></div>			<div class="menu-toggle-wrap">			<div class="navbar-toggle">				<span class="icon-bar"></span>				<span class="icon-bar"></span>				<span class="icon-bar"></span>			</div>			</div><!--<div class="tjanster"><div class="tjanst-desc"></div>	<div class="dropdown">  <button class="dropbtn"><h5>Jag behöver hjälp med.. </h5><i class="fa fa-angle-down"></i></button>  <div class="dropdown-content">    <a href="#">Utbildningar</a>    <a href="#">Affärsplan</a>    <a href="#">Investeringar</a>    <a href="#">Bokföring</a>    <a href="#">Årsbokslut</a>  </div></div></div>-->	
<div class="menu-wrap">
<div class="sticky-bg"><img id="whitelogo" src="<?php bloginfo('url');?>/wp-content/uploads/2016/06/ufs-white.png"></div><div class="nav-menu">
<nav><?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'navbar-nav navbar-right','container_class' => 'menu-main-menu-container') ); ?>	</nav><div class="clearfix"></div></div><div class="clearfix"></div></div></div>	</div>		</div></header>