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

  <div class="row secondary">
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
        <div class="row">
          <div class="columns small-6 medium-6 large-6 text-center">
            <p>Before</p>
            <img src="<?php the_field('before'); ?>" alt="">
          </div>
          <div class="columns small-6 medium-6 large-6 text-center">
            <p>After</p>
            <img src="<?php the_field('after'); ?>" alt="">
          </div>
        </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>



      <!-- <?php
        if ( function_exists( 'foundationpress_pagination' ) ) :
          foundationpress_pagination();
        elseif ( is_paged() ) :
        ?>
          <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
          </nav>
        <?php endif; ?> -->

      </div>
    </div>
  </div>

  <div class="row" style="padding-top: 100px;">
    <div class="columns small-12 medium-12 large-12 text-center">
      <div class="responsive-embed">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3lVHVrPI7AE" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
