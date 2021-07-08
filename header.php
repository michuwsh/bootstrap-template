<?php
/**
 * 
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Bootstrap template
 * @since Bootstrap template 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
	<header>
		<div class="content">
			<nav>
  				<div class="logo">
					<?php 
						if ( the_custom_logo() ) {
							the_custom_logo();
						}
					?>
    			</div>
                <div class="main-menu">
					<?php 					
				    	 wp_nav_menu( array( 'theme_location' => 'primary' ) ); 
					?>
                </div>
            </nav>
		</div>
	</header>
	<mian id="main" class="site-main">
