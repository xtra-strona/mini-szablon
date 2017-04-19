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

<?php if (is_home() || is_front_page()): ?>
  <h1 class="page-header">
      <?php bloginfo('name'); ?>
      <small><?php bloginfo('description'); ?></small>
  </h1>
<?php endif; ?>

<!-- Single Post -->
<?php while ( have_posts() ) : the_post();

    get_template_part('template-parts/content','single'); ?>
<!-- Pager -->
<div class="pager">
     <?php previous_post_link('<span class="prev-link">%link</span>', __('&larr; Poprzedni','textdomain')); ?>
     <?php next_post_link('<span class="next-link">%link</span>', __('Następny &rarr;','textdomain')); ?>
</div>

<?php 	// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

  <?php  endwhile; ?>

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
