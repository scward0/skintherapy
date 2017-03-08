<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="row">
		<div class="entry-content">
			<div class="columns small-12" style="padding: 30px;">
				<h3 style="font-size: 24px;"><?php the_title(); ?></h3>
				<p style="font-size: 16px;"><?php echo wp_trim_words( get_the_content(), 40, '...'); ?></p><br><br>
				<a href="<?php the_permalink(); ?>"><button style="top: 0;" class="button small">READ MORE</button></a>
			</div>
		</div>
</div>
