<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <?php the_field('headline'); ?>
      </div>
    </div>
  </div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
      <div class="content">
        <img src="<?php the_field('thumbnail'); ?>" alt="">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


</div>

<?php get_footer(); ?>
