<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
        <h2>
            <?php the_title();?>
        </h2>
        <p class="lead">
            by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('j F, Y'); ?></p>
        <hr>

        <?php if ( has_post_thumbnail() ) :?>
                   <a href="<?php the_post_thumbnail_url(); ?>">
                         <?php the_post_thumbnail('large',array('class'=>'img-responsive')); ?>
                  </a>
       <?php endif; ?>

        <?php the_content(); ?>
        <hr>
    </article>
<?php edit_post_link(); ?>
