<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>
	<div id="primary" class="site-content single-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				
                <?php comments_template( '', true ); ?>
         
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
     </div> 

<?php get_sidebar(); ?>
<?php get_footer(); ?>