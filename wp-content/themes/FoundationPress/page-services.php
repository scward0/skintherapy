
<?php /* Template Name: Secondary Page */ ?>

<div class="container secondary">
  <?php get_header(); ?>
  <img src="<?php the_field('hero'); ?>" width="100%" alt="">

  <div class="row">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <?php the_field('headline'); ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="content">
      <?php the_field('content'); ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
