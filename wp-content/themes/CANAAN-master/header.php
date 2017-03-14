<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title><?php wp_title( '|', true, 'right' ).bloginfo('name'); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--头像模糊<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animation.css">-->
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name="author" content="Cononico" />
    <meta name="application-name" content="<?php bloginfo('name'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="apple-mobile-app-capable" content="yes">
    <meta name="apple-mobile-app-status-bar-style" content="black">
    
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url')?>" />
    <link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="<?php bloginfo('rss_url')?>" />
    <link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url')?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/images/icon/favicon.ico" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <?php wp_head();

        $can_style = get_option("can_style");
        if ( !empty($can_style) ) {
	       echo "<style>" . $can_style . "</style>";
        }
    ?>
    
    <!--[if lt IE 9]>
	   <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>

<body>
<?php wp_head();

$dpt_style = get_option("dpt_style");
if ( !empty($dpt_style) ) {
    echo "<style>" . $dpt_style . "</style>";
}

?>

<?php if ( is_user_logged_in() ) { echo '<style type="text/css" media="screen"> .head_nav { top: 32px; } </style>'; } ?>

</head>

<body>

<header id="hcontent">
<!-- 导航菜单 -->
<nav id="head_nav" class="head_nav">
    <!-- 局左logo -->
    <div class="nav_logo_left">
    <h1 class="nav_title_left">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>
    </div>
    
    <div class="nav_main">
        <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
    </div>
    
    <div class="nav_search">
        <form id="nav_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input class="nav_search_input" type="text" name="s" id="s" placeholder="Search" size="10" />
        </form>
    </div>
</nav>
<div id="banner" style="background-image: url('<?php dpt_banner(); ?>');">
    <canvas class="demo-canvas" id="demo-canvas"></canvas>
</div>

<hgroup class="head_hgroup clearfix">
    <h1 class="head_title">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
    </h1>
    <h2 class="title_description"><?php bloginfo('description'); ?></h2>
</hgroup>
</header>

<div id="page" class="page">
    
<header class="head_menu">
    <div class="head_menu_img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/upload/head.jpg">
        <h1 class="menu_title">Cononico</h1>
        <h2 class="menu_description">“<?php bloginfo('description'); ?>”</h2>
    </div>
    
    <div class="menu_main">
		<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
	</div>
    
    <div class="menu_plur"></div>
</header>
