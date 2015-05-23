<?php
/**
 * Template Name: Member of the Month Template
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

  <div id="primary" class="site-content mom-page">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php /*post_class();*/ ?> class="box-style border-radius">
		<header class="entry-header">
			<h2><?php the_title(); ?></h2>
		</header>

		<div class="entry-content">
			<div class="mom-image">
				<?php if ( has_post_thumbnail() ) { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/img_mom_frame_top.png" class="mom-frame-top"/>
				<?php the_post_thumbnail(); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/img_mom_frame_bottom.png" class="mom-frame-bottom"/>
				<?php } ?>
			</div>	
			<?php the_content(); ?>
			<a href="<?php echo esc_url( home_url( '/mom-rules' ) ); ?>" class="btn-class border-radius btn-vote">Rules</a>
			<a href="<?php echo esc_url( home_url( '/mom-rewards' ) ); ?>" class="btn-class border-radius btn-vote">Rewards</a>
			<a href="<?php echo esc_url( home_url( '/hall-of-fame' ) ); ?>" class="btn-class border-radius btn-vote">Hall of Fame</a>
			<a href="<?php echo esc_url( home_url( '/vote-now' ) ); ?>" class="btn-class border-radius btn-vote">Vote Now</a>
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