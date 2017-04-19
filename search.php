<?php get_header();
        global $wp_query;
        $total_results = $wp_query->found_posts; ?>

<?php if(has_header_image()) : ?>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php header_image(); ?>">
      <h1 class="page-header-img">
        <?php bloginfo('name'); ?>
        <small><?php bloginfo('description'); ?></small>
      </h1>
        <h3 class='text-red'>
          <?php _e( 'Wyniki Wyszukiwania Dla: ' ) . the_search_query(); ?>
        </h3>
</div>
<br>

<?php else : ?>

<h1 class="page-header">
  <?php bloginfo('name'); ?>
  <small><?php bloginfo('description'); ?></small>
</h1>
    <h3 class='text-red'>
      <?php _e( 'Wyniki Wyszukiwania Dla: ' ) . the_search_query(); ?>
    </h3>
<br>

<?php endif; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

<?php if ( is_active_sidebar( 'sidebar-prawy' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif ?>
<h2 class='text-red'><?php echo __('Ilość Znalezionych Elementów: ' ,'textdomain') . $total_results; ?></h2>
<!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <ul>
                      <?php get_template_part('template-parts/content', 'search'); ?>
                    </ul>
            <?php endwhile; ?>

              <!-- Pager -->
                <?php the_posts_pagination( array(
                     'mid_size'  => 2,
                     'prev_text' => __( '&larr; Poprzedni', 'textdomain' ),
                     'next_text' => __( 'Następny &rarr;', 'textdomain' ),
                    ) );

                   else : ?>

                   <h3><?php _e( 'Brak Wyszukanego Słowa: ', 'textdomain' ) . the_search_query(); ?></h3>
                            <h4><?php echo __('Wyszukaj Ponownie: ', 'textdomain'); ?></h4>
                                     <?php get_search_form(); ?>
            <?php endif; ?>

        </div>

    <?php if ( is_active_sidebar( 'sidebar-prawy' ) ) { ?>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
                 <?php get_sidebar(); ?>
        </div>
    <?php } ?>

    </div>
    <!-- /.row -->

    <hr>
<?php get_footer(); ?>
