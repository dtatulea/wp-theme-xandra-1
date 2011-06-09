<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Anonymous+Pro:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" >

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<?php wp_head(); ?>
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="masthead">
		
			<div id="branding">
				<div id="blog-title"><span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span></div>
<?php if ( is_home() || is_front_page() ) { ?>
		    		<h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>
<?php } else { ?>	
		    		<div id="blog-description"><?php bloginfo( 'description' ) ?></div>
<?php } ?>
			</div><!-- #branding -->
			
			<div id="access">
				<?php wp_nav_menu(); ?>
			</div><!-- #access -->
			
		</div><!-- #masthead -->	
	</div><!-- #header -->
	
	<div id="main">
