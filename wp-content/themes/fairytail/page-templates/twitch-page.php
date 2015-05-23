<?php
/**
 * Template Name: Twitch Page Template
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

  <div id="primary" class="site-content twitch-page">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php /*post_class();*/ ?> class="box-style border-radius">
		<header class="entry-header">
			<h2><?php the_title(); ?></h2>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
			<ul>
	        <?php $twitches = get_group('twitch_account_info');
				foreach($twitches as $twitch):	
					echo '<li><a href="' . $twitch['twitch_account_link'][1] . '">'. $twitch['twitch_account_name'][1] . '</a></li>';
	      		endforeach; ?>
	      	</ul>	
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
		</article><!-- #post -->
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
<?php get_sidebar();?>
<?php get_footer(); ?>