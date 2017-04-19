<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_directory');?>/css/blog-home.css" rel="stylesheet">

<?php wp_head(); ?>
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
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
<?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ($image == true): ?>
<img class='img-responsive' src="<?php echo $image[0]; ?>" alt="logo-witryny" width="80" height="50" />
<?php else: ?>
<span class="blog-name"><?php  bloginfo('name'); ?></span>
<?php endif; ?>

  </a>
    </div>
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>

<?php if (is_home() || is_front_page() ) :?>

    <?php if(has_header_image()) : ?>

          <div class="parallax-window" data-parallax="scroll" data-image-src="<?php header_image(); ?>">
              <h1 class="page-header-img">
                  <?php bloginfo('name'); ?>
                  <small><?php bloginfo('description'); ?></small>
              </h1>

          </div>
       <br>

       <?php else : ?>

         <h1 class="page-header">
             <?php bloginfo('name'); ?>
             <small><?php bloginfo('description'); ?></small>
         </h1>
 <br>
 
    <?php endif; ?>

<?php endif; ?>
