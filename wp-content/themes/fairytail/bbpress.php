<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>

	<div id="primary" class="site-content page-content">
		<div id="content" role="main">
			<?php if( is_user_logged_in() ) { ?>
			    <?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'forum' ); ?>
				<?php endwhile; // end of the loop. ?>
			<?php } else {
			    _e('You must be logged in to view the forums.', 'twentyten-child');
			} ?>
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>