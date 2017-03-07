<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 medium-12 large-12 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>


		<div class="text-center" style="margin-top: 150px;">
			<h1><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
		</div>


	<?php if ( have_posts() ) : ?>

		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="columns small-12 medium-8 large-8" style="padding: 30px;">
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
</div>
<?php get_footer();
