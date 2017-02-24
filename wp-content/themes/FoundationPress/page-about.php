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
</div>

<?php get_footer(); ?>
