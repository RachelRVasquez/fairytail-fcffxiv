<?php
/**
 * Template Name: Front Page Template
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
   <div class="box-style latest-news news-post overflow border-radius">
    <h2>Fairy Tail News</h2>
    <?php 
    $idObj = get_category_by_slug('news'); 
    $id = $idObj->term_id;
    $args = array(
      'posts_per_page' => 1,
      'cat' => $id
      );
      $the_query = new WP_Query($args); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="news-post">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <div class="news-right box-sizing">
              <h2>
                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
              </h2>
              <p class="entry-date"><?php echo get_the_date(); ?></p>
            </div><!--news-right-->
            <div class="news-left overflow box-sizing">
              <?php the_post_thumbnail(); ?>
            </div><!--news-left-->
            <div class="clear"></div>
          </header><!-- .entry-header -->
          <div class="entry-content">
            <?php the_excerpt(); ?>
          </article><!-- #post -->
        </div>
        <?php endwhile;
        wp_reset_query();?>
      </div>      

      <?php global $post;

      $galleryArgs = array( 'posts_per_page' => 1, 'post_type'=> 'home_gallery' );

      $myposts = get_posts( $galleryArgs );

      foreach( $myposts as $post ) : setup_postdata($post); ?>

      <div class="flexslider home-carousel">
        <ul class="slides">
          <?php
      // get_group will retunr an array of all the groups and the group's fields
      // the parameter for this function is the group's name
          $slides = get_group('gallery_slide');
      // to see how the array is formed you can use pr($members);
      // the way the array is formed is
      // [group index][field name][field index]
      // The image fields in the array have one more level where the letter "original" and "thumb" which will show
      // the original or the thumbnail image
          foreach($slides as $slide){
            echo "<li class='relative'><img src='".$slide['gallery_slide_slide_image'][1]['thumb']."'>";
            echo "<div class='slide-caption'><p>".$slide['gallery_slide_slide_caption'][1]."</p></div></li>";
          }
          ?>
        </ul>
      </div>


    <?php endforeach; ?>

    <div class="box-style twitter-feed border-radius">
      <?php dynamic_sidebar( 'Home Twitter Widget Area' ); ?> 
    </div><!--twitter feed widget-->

    <div class="box-style activity-feed border-radius">
      <?php dynamic_sidebar( 'Home Feed Widget Area' ); ?> 
    </div><!--activity feed widget--> 

        <!-- <div class="box-style border-radius" id="feed">
        	<h2>Latest from Lodestone</h2>
            <script type="text/javascript" src="http://feed.informer.com/widgets/JUGU5OTT5P.js"></script>
<noscript><a href="http://feed.informer.com/widgets/JUGU5OTT5P.html">"Latest from Lodestone"</a>
Powered by <a href="http://feed.informer.com/">RSS Feed Informer</a></noscript>
  
</div> -->


</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar('front'); ?>
<?php get_footer(); ?>