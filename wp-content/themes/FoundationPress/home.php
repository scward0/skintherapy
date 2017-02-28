<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/blog.png" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <div class="text-center">
          <p style="font-size: 20px;">blog</p>
          <h1>Ask the Esthetician</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="columns small-12 medium-12 large-6" style="padding: 50px 0;">
      <div class="menu-centered">
        <ul class="menu">
          <li><a class="blog-menu-item" href="http://198.58.102.147/skintherapy/category/must-reads/">Must Reads</a></li>
          <li><a class="blog-menu-item" href="http://198.58.102.147/skintherapy/category/acne-tips/">Acne Tips</a></li>
        </ul>
      </div>
    </div>
    <div class="columns small-12 medium-12 large-6" style="padding: 50px 30px;">
      <div class="text-center">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>

  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="columns small-12 medium-6 large-6 text-center" style="padding: 75px 50px;">
          <img src="<?php the_field('thumbnail'); ?>" alt="" style="margin-bottom: 10px;">
          <br><span class="category-label">&mdash; <?php the_category( ', ' ); ?> &mdash;</span><br>
          <p style="font-size: 18px;"><?php the_title(); ?></p>
          <a href="<?php the_permalink(); ?>"><button style="top: 0;" class="button small">READ MORE</button></a>
        </div>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
