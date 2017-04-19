<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

<?php if ( is_active_sidebar( 'sidebar-prawy' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif ?>

          <!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                 get_template_part('template-parts/content', get_post_format());

              endwhile; ?>

              <!-- Pager -->
                <?php the_posts_pagination( array(
                     'mid_size'  => 2,
                     'prev_text' => __( '&larr; Poprzedni', 'textdomain' ),
                     'next_text' => __( 'Następny &rarr;', 'textdomain' ),
                    ) );

                   else : ?>

            	<h3><?php _e( 'Przepraszamy, brak wpisów spełniających podane kryteria.','textdomain' ); ?></h3>

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
