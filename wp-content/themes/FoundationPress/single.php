<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%" alt="">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <div class="row secondary">
    <div class="post-headline text-center">
      <?php the_title(); ?>
    </div>
    <br><br>
    <p class="text-center"><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
  </div>

  <div class="row secondary">
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
