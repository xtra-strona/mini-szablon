<article id="post-<?php the_ID(); ?>" <?php post_class('home-page'); ?>> <!-- Tutaj dodałem klasę Home Page ... Tak też możecie wcielać własne klasy -->
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
    </h2>
    <p class="lead">
        by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('j F, Y'); ?></p>
    <hr>

    <?php if ( has_post_thumbnail() ) { ?>
       <!-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> -->
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class'=>'img-responsive')); ?></a>
        <hr>
    <?php } ?>


    <?php the_excerpt(); ?>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Czytaj Wiecej <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
</article>
