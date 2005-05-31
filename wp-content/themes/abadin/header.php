<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta name ="viewport" content="width = 1020" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lte IE 8]><script>document.location = 'http://mixa.ir/oldbrowser.html';</script><![endif]-->
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/ico/favicon.ico" type="image/ico" rel="shortcut icon" />
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/ico/favicon.ico" type="image/ico" rel="icon" />
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/ico/apple_icon.png" type="image/png" rel="apple-touch-icon" />
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/ico/apple_icon.png" type="image/png"  rel="apple-touch-icon-precomposed"/>
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/ico/apple_icon.png" type="image/png" rel="icon"/>
	<meta name="generator" content="Mixa Team" />
	<meta name="author" content="Javad Evazzadeh | Evazzadeh.com" />
	<?php wp_head(); ?>
</head>
<body>
<!-- Begin #mainWrapper -->
<div id="mainWrapper">
	<!-- Begin #wrapper -->
	<div id="wrapper">
		<!-- Begin #header -->
		<header>
			<!-- Begin #logo -->
			<div id="logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('description'); ?> | <?php echo bloginfo( 'name' ) ?>" rel="home">
                <?php if ( !of_get_option('journal_clogo')== '') { ?>
					<img src="<?php echo of_get_option('journal_clogo'); ?>" alt="<?php bloginfo('description'); ?> | <?php echo bloginfo( 'name' ) ?>" />
				<?php } elseif( !of_get_option('journal_clogo_text')== '') {
				        echo of_get_option('journal_clogo_text');
                    } else {
					bloginfo( 'name' );
				    }?>
                </a>
			</div>
			<!-- End #logo -->
			<!-- Begin #topMenu -->
            <nav id="topMenu" class="ddsmoothmenu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container'=>'false', 'fallback_cb'=>'primarymenu') );?>
            </nav>
			<!-- End #topMenu -->
			<!-- Begin #topSearch -->
			<div id="topSearch">
				<form id="searchform" action="<?php echo home_url( '/' ); ?>" method="get">
					<input type="text" id="s" name="s" value="" />
				</form>
			</div>
			<!-- End #topSearch -->

		</header>
		<!-- End #header -->
		<!-- Begin #content -->
		<div id="content">
