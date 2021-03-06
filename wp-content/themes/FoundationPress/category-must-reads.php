<div class="container">
  <?php get_header(); ?>
  <img class="hero" src="http://198.58.102.147/skintherapy/wp-content/uploads/2017/02/BlogNew.jpg" width="100%" alt="">

  <div class="row secondary">
    <div class="headline secondary-headline">
      <div class="headline-border">
        <div class="text-center">
          <p style="font-size: 16px;">education</p>
          <h1>Must Reads</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="columns small-12 medium-12 large-6" style="padding: 50px 0;">
      <div class="menu-centered">
        <ul class="menu">
          <li><a style="color: #EC008C;" class="blog-menu-item" href="http://198.58.102.147/skintherapy/category/must-reads/">Must Reads</a></li>
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
      <div class="columns small-12 medium-8 large-8">
    		<?php do_action( 'foundationpress_before_content' ); ?>


    	<?php if ( have_posts() ) : ?>

    		<div class="row">
    			<?php while ( have_posts() ) : the_post(); ?>
    				<div class="columns small-12" style="padding: 30px;">
    					<h3 style="font-size: 24px;"><?php the_title(); ?></h3>
              <p style="font-size: 16px;"><?php echo wp_trim_words( get_the_content(), 40, '...'); ?></p><br><br>
    					<a href="<?php the_permalink(); ?>"><button style="top: 0;" class="button small">READ MORE</button></a>
    				</div>
    			<?php endwhile; ?>
    		</div>


    		<?php else : ?>
    			<br><br><br>
    			<?php get_template_part( 'template-parts/content', 'none' ); ?>

    	<?php endif;?>

    	<?php do_action( 'foundationpress_before_pagination' ); ?>

    	<?php
    	if ( function_exists( 'foundationpress_pagination' ) ) :
    		foundationpress_pagination();
    	elseif ( is_paged() ) :
    	?>

    		<nav id="post-nav">
    			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
    			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
    		</nav>
    	<?php endif; ?>

    	<?php do_action( 'foundationpress_after_content' ); ?>
        </div>

        <div class="columns small-12 medium-4 large-4">
          <style media="screen">
            .sidebar{
              width: 100%;
            }
          </style>
          <?php get_sidebar(); ?>
        </div>


    	</div>

    </div>
  <?php get_footer(); ?>
