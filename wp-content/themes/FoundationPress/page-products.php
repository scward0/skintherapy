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
      <!-- <div class="columns small-12 medium-6 large-6 text-center">
        <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/03/cleanse.jpg" alt="cleanse">
      </div>
      <div class="columns small-12 medium-6 large-6 text-center">
        <h3>Cleanse</h3>
        <p style="text-align: left;">We offer four unique cleansers in our Clear Command Skincare line.  Whether you have facial or body acne we have a safe effective cleanser for every skin and acne type.  Our cleansing formulations help remove dirt, oil and pollutants on acne prone skin.</p>
        <a href="#"><button class="button small text-center" name="button">SHOP CLEANSE</button></a>
      </div> -->
      <?php the_field('products'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
