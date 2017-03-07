
<?php /* Template Name: Front Page */ ?>

<div style="background: url('<?php the_field('parallax_background'); ?>'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
  <?php get_header(); ?>
  <div class="headline" id="headline1">
    <div class="headline-border">
      <?php the_field('headline'); ?>
    </div>
  </div>
</div>

<div class="mobile-subhead" style="margin-top: 100px; font-size: 18px;">
  <p class="text-center" style="padding: 0 15%;">
    The journey to achieving clear skin takes commitment and teamwork. Our comprehensive approach to treating acne without harsh prescriptions allows us to personalize your experience every step of the way. Together, we will create a plan that produces results.
    <br><br><br>
    <span class="title-hr">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  </p>
</div>

<section class="no-max" id="road-map" style="background: url('<?php the_field('background_2') ?>'); margin-top: 100px; height: 80%; background-size: cover;">
  <div class="headline headline2">
    <div class="headline-border">
      <?php the_field('headline_2') ?>
    </div>
  </div>
</section>

<section class="no-max container" id="road-map-steps">
  <div class="row">
    <br>
    <div class="columns small-12 medium-12 large-4 step">
      <div class="left">
        <h4>1. talk</h4>
        <p>We will investigate what factors could be making your acne worse and set you on the right path to success.</p>
        <div class="text-center"><img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/03/talk3.jpg" style="max-width: 300px;" alt=""></div>
      </div>
    </div>
    <div class="columns small-12 medium-12 large-4 hide-for-small-only step">
      <div class="up">
        <div class="text-center"><img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/treat.png" style="max-width: 300px;" alt=""></div>
        <h4>2. treat</h4>
        <p>We create a long-term skin care program just for you, based on your skin and acne type.</p>
      </div>
    </div>
    <div class="columns small-12 show-for-small-only step">
      <h4>2. treat</h4>
      <p>We creat a long-term skin care program just for you, based on your skin and acne type.</p>
      <div class="text-center"><img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/treat.png" style="max-width: 300px;" alt=""></div>
    </div>
    <div class="columns small-12 medium-12 large-4 step">
      <div class="right">
        <h4>3. clear</h4>
        <p>We follow-up and fine tune your skin care plan to achieve lasting results.</p><br>
        <div class="text-center"><img src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/clear.png" style="max-width: 300px;" alt=""></div>
      </div>
    </div>
  </div>
  <div class="row text-center in">
    <button class="button small" style="top:0;">LEARN MORE</button>
  </div>
</section>

<section class="no- max container" id="book" style="background: url('<?php the_field('background_3') ?>'); margin-top: 100px; height: 80%; background-size: cover;">
  <div class="headline headline3 hide-for-small-only">
    <div class="headline-border">
      <?php the_field('headline_3') ?>
    </div>
  </div>
</section>

<section class="show-for-small-only" style="margin-top: 100px;">
  <?php the_field('headline_3') ?>
</section>

<section class="no- max container" id="omega" style="background: url('<?php the_field('background_4') ?>'); margin-top: 100px; height: 80%; background-size: cover;">
  <div class="headline headline4 hide-for-small-only">
    <div class="headline-border">
      <?php the_field('headline_4') ?>
    </div>
  </div>
</section>

<section class="show-for-small-only" style="margin-top: 100px;">
  <?php the_field('headline_4') ?>
</section>

<section class="no- max container" id="cream" style="background: url('<?php the_field('background_5') ?>');  margin-top: 100px; height: 80%; background-size: cover;">
  <div class="headline headline5 hide-for-small-only">
    <div class="headline-border text-center">
      <?php
        $args = array( 'numberposts' => 1 );
        $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); ?>
          <h1>read the latest</h1>
        	<p><a style="text-transform: lowercase; color: black;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <a href="<?php the_permalink(); ?>"><button style="top: 38px;" class="button small">READ MORE</button></a>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="show-for-small-only text-center" style="margin-top: 100px;">
  <?php
    $args = array( 'numberposts' => 1 );
    $lastposts = get_posts( $args );
    foreach($lastposts as $post) : setup_postdata($post); ?>
      <h1 style="font-size: 36px;">read the latest</h1>
      <p><a style="text-transform: lowercase; color: black; font-size:20px;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      <a href="<?php the_permalink(); ?>"><button style="top: 38px;" class="button small">READ MORE</button></a>
    <?php endforeach; ?>
</section>

<?php get_footer(); ?>
