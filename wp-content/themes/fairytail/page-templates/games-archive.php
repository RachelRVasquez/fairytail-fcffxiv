<?php
/**
 * Template Name: GMG Challenge Archive Template
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

get_header(); 
$chall_entries = get_group('challenge_entry', $post_id=4602);
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class="gmg-wrap">

        <a href="<?php echo site_url('grand-magic-games'); ?>" class="gmg-top-links border-radius">&#171; Back to Grand Magic Games</a>

        <?php while ( have_posts() ) : the_post();

        the_content();

        endwhile; // end of the loop. ?>

        <div class="clear"></div>
        <!-- == ARCHIVED CHALLENGES ===================================== -->
        <table class="gmg-table archive-table">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Description</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Achievement</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $archive_entry): //archived challenges only
            if( $archive_entry['challenge_entry_archive_challenge'][1] ):
              $ach_id = intval($archive_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'>" . $archive_entry['challenge_entry_challenge_name'][1] . "</td>";
              echo "<td class='mobile-second'>" . $archive_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $archive_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>"; 
            endif;
          endforeach; ?>
          </tbody>
        </table>
      </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>