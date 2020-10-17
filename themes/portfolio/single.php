<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container">
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<?php the_post_navigation(); ?>
		<?php comments_template(); ?>
	<?php endwhile; ?>
</div>
<?php get_footer();
