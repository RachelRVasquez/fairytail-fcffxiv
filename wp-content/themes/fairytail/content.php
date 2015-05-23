<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
	<div class="box-style border-radius news-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
        	<?php if ( has_post_thumbnail() ) { ?>
			<?php the_post_thumbnail(); ?>
            <?php } ?><!--end if has thumbnail-->
			<?php if ( is_single() ) : ?>
			<h2><?php the_title(); ?></h2>
			<?php else : ?>
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php endif; // is_single() ?>
            <p class="entry-date"><?php echo get_the_date(); ?></p>
            <?php if ( has_post_thumbnail() ) { ?>
            
            <div class="clear"></div>
            <?php } ?><!--ending if has thumbnail closing divs-->
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
        

		<footer class="entry-meta overflow">
        	<div class="entry-meta-left float-left">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
            <div class="entry-meta-right float-right">
             <?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a Comment', 'twentytwelve' ) . '</span>', __( '1 Comment', 'twentytwelve' ), __( '% Comments', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
            </div>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
    </div>
