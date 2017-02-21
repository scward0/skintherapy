
<?php /* Template Name: Front Page */ ?>

<div style="background: url('<?php the_field('parallax_background'); ?>'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
  <?php get_header(); ?>
  <div class="headline" id="headline1">
    <div class="headline-border">
      <?php the_field('headline'); ?>
    </div>
  </div>
</div>


<div class="mobile-subhead hide-for-large" style="margin-top: 100px; font-size: 18px; padding: 2%;">
  <?php the_field('mobile_subhead'); ?>
</div>

<section class="no-max" id="road-map" style="background: url('<?php the_field('background_2') ?>'); margin-top: 200px; height: 80%; background-size: cover;">
  <div class="headline headline2">
    <div class="headline-border">
      <?php the_field('headline_2') ?>
    </div>
  </div>
</section>

<section class="no-max container" id="road-map-steps">
  <div class="row">
    <div class="columns small-12 medium-4 large-4 step">
      <div class="left">
        <h4>1. talk</h4>
        <p>We provide you with the tools and knowledge to identify what is irritating for your skin.</p>
        <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/talk.png" alt="">
      </div>
    </div>
    <div class="columns small-12 medium-4 large-4 hide-for-small-only step">
      <div class="up">
        <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/treat.png" alt="">
        <h4>2. treat</h4>
        <p>We creat a long-term skin care program just for you, based on your skin and acne type.</p>
      </div>
    </div>
    <div class="columns small-12 show-for-small-only step">
      <h4>2. treat</h4>
      <p>We creat a long-term skin care program just for you, based on your skin and acne type.</p>
      <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/treat.png" alt="">
    </div>
    <div class="columns small-12 medium-4 large-4 step">
      <div class="right">
        <h4>3. clear</h4>
        <p>We follow up and fine tune your skin care plan to achieve results</p>
        <img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/clear.png" alt="">
      </div>
    </div>
  </div>
  <div class="row text-center in">
    <button class="button small">LEARN MORE</button>
  </div>
</section>

<section class="no- max container" id="book" style="background: url('<?php the_field('background_3') ?>'); margin-top: 200px; height: 80%; background-size: cover;">
  <div class="headline headline3">
    <div class="headline-border">
      <?php the_field('headline_3') ?>
    </div>
  </div>
</section>

<section class="no- max container" id="omega" style="background: url('<?php the_field('background_4') ?>'); margin-top: 200px; height: 80%; background-size: cover;">
  <div class="headline headline4">
    <div class="headline-border">
      <?php the_field('headline_4') ?>
    </div>
  </div>
</section>

<section class="no- max container" id="cream" style="background: url('<?php the_field('background_5') ?>');  margin-top: 200px; height: 80%; background-size: cover;">
  <div class="headline headline5">
    <div class="headline-border text-center">
      <?php
        $args = array( 'numberposts' => 1 );
        $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); ?>
        	<h1><a style="text-transform: lowercase; color: black;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        	<?php the_content(); ?>
          <button href="<?php the_permalink(); ?>" class="button small">READ MORE</button>
        <?php endforeach; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
