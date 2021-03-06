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
 * 
 * NOT CURRENTLY BEING USED!!!!! 7/1/2015
 */

get_header(); 
$chall_entries = get_group('challenge_entry', $post_id=4602);
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class="gmg-wrap remodal-bg">

        <a href="<?php echo site_url('grand-magic-games'); ?>" class="gmg-top-links border-radius" id="gmg-top-05"><span>&#171; Back</span></a>

        <div class="clear"></div>
        <!-- == WARRIOR ===================================== -->
        <button role="button" name="challenge-trigger-one" class="btn-chall btn-chall-one" data-table="warrior-table">Challenges of the Warrior</button>
        <table class="gmg-table warrior-table">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $war_entry): //warrior challenges only
            if( ($war_entry['challenge_entry_challenge_type'][1] == 'Warrior') && ($war_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($war_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='warrior-modal'>" . $war_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $war_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $war_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>"; 
            endif;
          endforeach; ?>
          </tbody>
        </table>
        <!-- == ARTISAN ===================================== -->
        <button role="button" name="challenge-trigger-two" class="btn-chall btn-chall-two float-right" data-table="artisan-table">Challenges of the Artisan</button>
        <div class="clear"></div>
        <table class="gmg-table artisan-table overflow float-right">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $art_entry): //artisan challenges only
            if( ($art_entry['challenge_entry_challenge_type'][1] == 'Artisan') && ($art_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($art_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='artisan-modal'>" . $art_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $art_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $art_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>
        <!-- == GATHERER ===================================== -->
        <button role="button" name="challenge-trigger-three" class="btn-chall btn-chall-three" data-table="gatherer-table">Challenges of the Gatherer</button>
        <table class="gmg-table gatherer-table">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $gath_entry): //gatherer challenges only
            if( ($gath_entry['challenge_entry_challenge_type'][1] == 'Gatherer') && ($gath_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($gath_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='gatherer-modal'>" . $gath_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $gath_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $gath_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>
        <!-- == COLLECTOR ===================================== -->
        <button role="button" name="challenge-trigger-four" class="btn-chall btn-chall-four float-right" data-table="collector-table">Challenges of the Collector</button>
        <div class="clear"></div>
        <table class="gmg-table collector-table overflow float-right">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $coll_entry): //collector challenges only
            if( ($coll_entry['challenge_entry_challenge_type'][1] == 'Collector') && ($coll_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($coll_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='collector-modal'>" . $coll_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $coll_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $coll_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>
        <!-- == PAST ===================================== -->
        <button role="button" name="challenge-trigger-five" class="btn-chall btn-chall-five" data-table="past-table">Challenges of the Past</button>
        <table class="gmg-table past-table">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $past_entry): //past challenges only
            if( ($past_entry['challenge_entry_challenge_type'][1] == 'Collector') && ($past_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($past_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='past-modal'>" . $past_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $past_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $past_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>
        <!-- == CARDS ===================================== -->
        <button role="button" name="challenge-trigger-six" class="btn-chall btn-chall-six float-right" data-table="cards-table">Challenges of the Cards</button>
        <div class="clear"></div>
        <table class="gmg-table cards-table overflow float-right">
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Objective</th>
                  <th class="mobile-third">Expires</th>
                  <th class="mobile-fourth">Unlocks</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $cards_entry): //cards challenges only
            if( ($cards_entry['challenge_entry_challenge_type'][1] == 'Cards') && ($cards_entry['challenge_entry_archive_challenge'][1]) ):
              $ach_id = intval($cards_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'><a href='#' data-remodal-target='cards-modal'>" . $cards_entry['challenge_entry_challenge_name'][1] . "</a></td>";
              echo "<td class='mobile-second'>" . $cards_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'>" . $cards_entry['challenge_entry_expiration'][1] . "</td>";
              echo "<td class='mobile-fourth'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>
      </div><!--gmg-wrap-->


      <?php 
      /* * 
      * Partials for task modals & index 
      */

      include( locate_template('/partials/gmg-war-modal.php') );

      include( locate_template('/partials/gmg-art-modal.php') );

      include( locate_template('/partials/gmg-gath-modal.php') );

      include( locate_template('/partials/gmg-coll-modal.php') );

      include( locate_template('/partials/gmg-past-modal.php') );

      include( locate_template('/partials/gmg-cards-modal.php') ); 

      ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>