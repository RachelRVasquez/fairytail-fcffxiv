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

get_header(); 
$chall_entries = get_group('challenge_entry', $post_id=4602);
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
      <div class="gmg-wrap">
        <button role="button" name="challenge-trigger-one" class="btn-chall btn-chall-one">Challenges of the Warrior</button>
        <table class="gmg-table warrior-table">
          <colgroup>
              <col width=""/>
              <col width=""/>
          </colgroup>
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Description</th>
                  <th class="mobile-third">Achievement</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $war_entry): //warrior challenges only
            if( $war_entry['challenge_entry_challenge_type'][1] == 'Warrior' ):
              $ach_id = intval($war_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'>" . $war_entry['challenge_entry_challenge_name'][1] . "</td>";
              echo "<td class='mobile-second'>" . $war_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>

        <button role="button" name="challenge-trigger-two" class="btn-chall btn-chall-two float-right">Challenges of the Artisan</button>
        <div class="clear"></div>
        <table class="gmg-table artisan-table overflow float-right">
          <colgroup>
              <col width=""/>
              <col width=""/>
          </colgroup>
          <thead>
              <tr>
                  <th class="mobile-first">Challenge</th>
                  <th class="mobile-second">Description</th>
                  <th class="mobile-third">Achievement</th>
              </tr>
          </thead>
          <tbody>
          <?php
          foreach($chall_entries as $art_entry): //artisan challenges only
            if( $art_entry['challenge_entry_challenge_type'][1] == 'Artisan' ):
              $ach_id = intval($art_entry['challenge_entry_achievement_id'][1]);
              $ach_link = get_the_permalink($ach_id);
              echo "<tr>";  
              echo "<td class='mobile-first'>" . $art_entry['challenge_entry_challenge_name'][1] . "</td>";
              echo "<td class='mobile-second'>" . $art_entry['challenge_entry_challenge_desc'][1] . "</td>";
              echo "<td class='mobile-third'><a href='" . $ach_link . "'>" . get_the_post_thumbnail( $ach_id, 'thumbnail' ) . "</a></td>";
              echo "</tr>";
            endif;
          endforeach;
          ?>
          </tbody>
        </table>

        <button role="button" name="challenge-trigger-three" class="btn-chall btn-chall-three">Challenges of the Gatherer</button>
        <button role="button" name="challenge-trigger-four" class="btn-chall btn-chall-four float-right">Challenges of the Collector</button>
        <div class="clear"></div>
        <button role="button" name="challenge-trigger-five" class="btn-chall btn-chall-five">Challenges of the Past</button>
        <button role="button" name="challenge-trigger-six" class="btn-chall btn-chall-six float-right">Challenges of the Cards</button>
        <div class="clear"></div>
		  </div><!--gmg-wrap-->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>