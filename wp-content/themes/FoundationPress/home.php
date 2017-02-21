<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/blog.png" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <div class="text-center">
          <p style="font-size: 16px;">education / blog</p>
          <h1>Ask the Esthetician</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="columns small-12 medium-6 large-6 text-center">
          <img src="<?php the_field('thumbnail'); ?>" alt="">
          <p style="font-size: 18px;"><?php the_title(); ?></p>
          <a href="<?php the_permalink(); ?>"><button style="top: 0;" class="button small">READ MORE</button></a>
        </div>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
