<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>

		<div id="content" role="main" class="site-content overflow">

		<?php if ( have_posts() ) : ?>
		<ul class="mag-list overflow">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', 'sorcerer' );

			endwhile;?>
			</ul>
			<a href="<?php echo get_site_url('','category/news'); ?>" class="link-old-news">See our old News Posts &raquo;</a>
			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>