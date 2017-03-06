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

  <div class="row secondary">
    <div class="content">
      <?php the_field('content'); ?>
    </div>
  </div>

  <div class="row secondary">
    <div class="products">
      <div class="columns small-12 medium-6 large-6">
        <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/03/cleanse.jpg" alt="">
      </div>
      <div class="columns small-12 medium-6 large-6">
        <h3>Cleanse</h3>
        <button class="button small" name="button">SHOP CLEANSE</button>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
