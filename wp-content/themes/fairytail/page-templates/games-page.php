<?php
/**
 * Template Name: Grand Magic Games Page Template
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
      <div class="gmg-wrap">
        <button role="button" name="challenge-trigger-one" class="btn-chall btn-chall-one">Challenges of the Warrior</button>
        <button role="button" name="challenge-trigger-two" class="btn-chall btn-chall-two float-right">Challenges of the Artisan</button>
        <div class="clear"></div>
        <button role="button" name="challenge-trigger-three" class="btn-chall btn-chall-three">Challenges of the Gatherer</button>
        <button role="button" name="challenge-trigger-four" class="btn-chall btn-chall-four float-right">Challenges of the Collector</button>
        <div class="clear"></div>
        <button role="button" name="challenge-trigger-five" class="btn-chall btn-chall-five">Challenges of the Past</button>
		  </div><!--gmg-wrap-->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>