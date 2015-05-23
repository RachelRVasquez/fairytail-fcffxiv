<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?>
	<li class="box-style border-radius mag-post float-left">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php if ( has_post_thumbnail() ) { ?>
				<a href="<?php echo get('sorcerer_magazine_link'); ?>"><?php the_post_thumbnail(); ?></a>
            <?php } ?><!--end if has thumbnail-->
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
        
	</article><!-- #post -->
    </li>
