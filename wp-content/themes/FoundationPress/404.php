<div class="container ">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
				<h1>Oops</h1>
				<p>The page you are looking for does not exist</p>
      </div>
    </div>

		<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'foundationpress' ); ?></li>
  </div>

<?php get_footer();
