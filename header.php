<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>
  
  <div class="off-canvas-wrap">
  <div class="inner-wrap">
  
  <?php do_action('foundationPress_layout_start'); ?>
  
  <nav class="tab-bar show-for-small-only">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">
      
      <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  
        <!-- Start header and logo stuff -->

			<div class="small-12 columns blue-block no-padding">
				<div class="small-12 medium-5 columns header-background">
					&nbsp;
				</div>
				<div class="row">
					<div class="small-12">
						<div class="row">
							<div class="small-12 medium-4 columns small-text-center">
								<div>
									<a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ape-logo-home.png" class="header-logo" alt="<?php _e('Logo of the Parents Association of the European School','apeees');?>"></a>
								</div>
								<div>
									<a href="<?php bloginfo( 'url' ); ?>" class="site-title"><?php _e('Parents Association of <br>the European School', 'apeees');?></a>
								</div>
							</div>
							<div class="small-12 medium-8 columns text-right">
								<div class="top-nav text-right">
									<?php foundationPress_top_nav(); ?>
								</div>
								<div class="clr" id="language-selector">
									<?php if (function_exists('qts_language_menu') ) qts_language_menu('text'); ?>
  								  	<script>$(document).ready(function(){ 
										$('#qts-lang-menu a[hreflang="en"]').html('EN');
									 	$('#qts-lang-menu a[hreflang="fr"]').html('FR'); 
										$('#qts-lang-menu a[hreflang="de"]').html('DE');
										$('.qts-lang-menu').addClass('inline-list right');
										$('.qts-lang-menu li a').addClass('button tiny secondary');
									})</script>
								</div>
								<div id="buttons-and-search" class="clr row collapse has-form">
									<div class="small-12 medium-6 medium-offset-2 text-right columns">
										<a href="" class="button tiny secondary"><?php _e('Contact','apeees'); ?></a>
										<a href="" class="button tiny secondary"><?php _e('Newsletter','apeees'); ?></a>
									</div>
									<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
									<div class="small-12 medium-4 columns no-padding"><input type="text" placeholder="<?php _e('Your search','apeees'); ?>" name="s" id="s" class="expand"/></div>									</div>
									</form>
								</div>
								<nav class="main-nav">
									<?php foundationPress_main_nav();?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>