<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%;" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <?php the_field('headline'); ?>
      </div>
    </div>
  </div>

  <div class="row secondary">
    <div class="content">
      <?php the_field('content'); ?>
    </div>
  </div>

  <div class="row">
    <div class="columns small-12 medium-12 large-12 text-center">
      <a href="http://198.58.102.147/skintherapy/"><button class="button">GET STARTED</button></a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
