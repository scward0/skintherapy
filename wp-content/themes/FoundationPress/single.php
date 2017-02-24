<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%" alt="">

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

<?php get_footer(); ?>
