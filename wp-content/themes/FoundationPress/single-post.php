<?php get_header(); ?>
<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row secondary">
    <div class="post-headline text-center">
    <h1><?php the_title(); ?></h1>
    </div>
    <br><br>
    <p class="text-center"><span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
  </div>

  <div class="row secondary">
    <div class="content single-content" style="padding 0 50px;">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="row text-center">
    <a href="http://198.58.102.147/skintherapy/education/"><button class="button small" name="button">LEARN MORE</button></a>
  </div>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
