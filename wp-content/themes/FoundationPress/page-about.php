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
    <div class="columns small-12 medium-4 large-4 text-center">
      <a href="http://198.58.102.147/skintherapy/products/"><button class="button small">Products</button></a>
    </div>
    <div class="columns small-12 medium-4 large-4 text-center">
      <a href="http://198.58.102.147/skintherapy/services/"><button class="button small">Services</button></a>
    </div>
    <div class="columns small-12 medium-4 large-4 text-center">
      <a href="http://198.58.102.147/skintherapy/blog/"><button class="button small">Learn More</button></a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
