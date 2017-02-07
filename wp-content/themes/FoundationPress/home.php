
<?php /* Template Name: Front Page */ ?>

<div style="background: url('<?php the_field('parallax_background'); ?>'); height: 100%; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
  <?php get_header(); ?>
  <div class="headline" id="headline1">
    <div class="headline-border">
      <?php the_field('headline') ?>
    </div>
  </div>
</div>

<section class="no-max" id="road-map">
  <div class="headline headline2">
    <div class="headline-border">
      <p class="text-center subhead">
        our road map to
      </p>
      <h1 class="text-center">clear skin</h1>
    </div>
  </div>
</section>

<section class="no-max container" id="road-map-steps">
  <div class="row">
    <div class="columns small-12 medium-4 large-4">
      <h4>1. talk</h4>
      <p>We provide you with the tools and knowledge to identify what is irritating for your skin.</p>
      <img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/talk.png" alt="">
    </div>
    <div class="columns small-12 medium-4 large-4">
      <img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/treat.png" alt="">
      <h4>2. treat</h4>
      <p>We creat a long-term skin care program just for you, based on your skin and acne type.</p>
    </div>
    <div class="columns small-12 medium-4 large-4">
      <h4>3. clear</h4>
      <p>We follow up and fine tune your skin care plan to achieve results</p>
      <img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/clear.png" alt="">
    </div>
  </div>
  <div class="row text-center">
    <button class="button small">LEARN MORE</button>
  </div>
</section>

<section class="no- max container" id="book">
  <div class="headline headline3">
    <div class="headline-border">
      <h3 class="text-center">Acne Specialists <img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/unnamed-file.png" alt="" width="100px"> Skin Care Experts</h3>
      <button id="book-now" class="button small">BOOK NOW</button>
    </div>
  </div>
</section>

<section class="no- max container" id="omega">
  <div class="headline headline3">
    <div class="headline-border">
      <h3 class="text-center">omega 3 fish oils/ DHA</h3>
      <p>FAQs on all the ways fish oils can benefit your skin, body and mind.</p>
      <div class="text-center">
        <button id="read-the-latest" class="button small">READ THE LATEST</button>
      </div>
    </div>
  </div>
</section>

<section class="no- max container" id="cream">
  <div class="headline headline3">
    <div class="headline-border">
      <h3 class="text-center">acne cream 10%</h3>
      <p>This cream is formulated without pore cloggers unline many popular acne treatments.</p>
      <div class="text-center">
        <button id="online-store" class="button small">ONLINE STORE</button>
      </div>
  </div>
</section>


<?php get_footer(); ?>
