<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="<?php the_field('hero'); ?>" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <div class="text-center"><h1>Results</h1></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="content">
      <div class="columns small-12 medium-12 large-8" id="cases">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'case',
          'posts_per_page' => '7',
          'paged' => $paged
        );
        $wp_query = new WP_Query ($args);
        ?>

      <?php if( $wp_query->have_posts() ) : while($wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <div class="row" style="margin-bottom: 75px;">
          <div class="columns small-6 medium-6 large-6 text-center" style="margin-bottom: 50px;">
            <p>Before</p>
            <img src="<?php the_field('before'); ?>" alt="">
          </div>
          <div class="columns small-6 medium-6 large-6 text-center">
            <p>After</p>
            <img src="<?php the_field('after'); ?>" alt="">
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>

      </div>
      <div class="columns small-12 medium-12 large-4 testimonials">
        <br><br>
        <?php
          $args = array(
            'post_type' => 'testimonial'
          );
          $wp_query = new WP_Query ($args);
          ?>

        <?php if( $wp_query->have_posts() ) : while($wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>

      <p class="text-center">
        <a target="_blank" href="https://www.google.com/webhp?sourceid=chrome-instant&rlz=1C5CHFA_enUS704US704&ion=1&espv=2&ie=UTF-8#q=SkinTherapy+Skincare+%26+Acne+Clinic&lrd=0x8752871bbdea0af3:0x6b9ae9ca2cdf8b54,1,"><button class="button small">READ ALL REVIEWS</button></a>
      </p>
    </div>
  </div>

  <div class="row" style="padding-top: 100px;">
    <div class="columns small-12 medium-12 large-8 text-center">
      <div class="responsive-embed">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3lVHVrPI7AE" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
