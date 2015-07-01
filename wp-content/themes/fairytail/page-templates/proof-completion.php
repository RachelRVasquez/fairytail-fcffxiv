<?php
/**
 * Template Name: Proof Completion Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php /*post_class();*/ ?> class="box-style border-radius">
        <header class="entry-header">
          <h2><?php the_title(); ?></h2>
        </header>

        <div class="entry-content">  
          <?php the_content(); ?>
        <footer class="entry-meta">
          <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
        </article><!-- #post -->
      <?php endwhile; // end of the loop. ?>
     
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>