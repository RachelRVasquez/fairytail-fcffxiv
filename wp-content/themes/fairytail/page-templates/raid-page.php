<?php
/**
 * Template Name: Raid Home Template
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */

get_header(); ?>

<div id="primary" class="site-content raid-page">
  <div id="content" role="main">
    <?php wp_nav_menu( array( 'theme_location' => 'Raid Links', 'menu_class' => 'Raid Links', 'container_class' => 'raid-menu-wrapper', 'menu_id' => 'raid-menu' ) ); ?>

    <div class="box-style raid-content">
      <div class="raid-landing-nav overflow">
        <button role="button" name="show-raid-index" data-content="ri-index" class="btn-content-switch">Raid Index</button>
        <button role="button" name="show-attendance-forms" data-content="ri-attendance" class="btn-content-switch">Attendance Form</button>
        <button role="button" name="show-loot-forms" data-content="ri-loot" class="btn-content-switch">Loot Form</button>
        <button role="button" name="show-team-names" data-content="ri-team" class="btn-content-switch">Team Names</button>
        <button role="button" name="show-calendar" data-content="ri-calendar" class="btn-content-switch">Calendar</button>
        <button role="button" name="show-raid-registry" data-content="ri-registry" class="btn-content-switch">Raid Registry</button>
        <button role="button" name="show-job-changes" data-content="ri-jobs" class="btn-content-switch">Job Change</button>
        <button role="button" name="show-team-transfers" data-content="ri-transfer" class="btn-content-switch">Team Transfer</button>
        <button role="button" name="show-member-dismissals" data-content="ri-dismissal" class="btn-content-switch">Member Dismissal</button>
      </div>

    <?php
      //get all the pages! (insert meme here)
      $my_wp_query = new WP_Query();
      $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

      //get this page's id by slug homie
      $this_page = get_page_by_path('raid-index');
      $parent_id = $this_page->ID;

      //gimme all the kiddies so I can create a raid army bwahahaha!
      $raid_children = get_page_children( $parent_id, $all_wp_pages );

      //var_dump($raid_children);
      $dismissal_content = $raid_children[0]->post_content;
      $transfer_content = $raid_children[1]->post_content;
      $job_content = $raid_children[2]->post_content;
      $registry_content = $raid_children[3]->post_content;
      $calendar_content = $raid_children[4]->post_content;
      $team_content = $raid_children[5]->post_content;
      $loot_content = $raid_children[6]->post_content;
      $attendance_content = $raid_children[7]->post_content;
    ?>

      <div class="raid-content-switch-wrapper">
        <div class="raid-content" id="ri-index">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
      </div>
      <div class="raid-content" id="ri-attendance">
        <?php 
        if( $attendance_content == TRUE ):
          echo $attendance_content; 
        endif;
        ?>
      </div>
      <div class="raid-content" id="ri-loot">
        <?php 
        if( $loot_content == TRUE ):
          echo $loot_content;
        endif;
        ?>
      </div>
      <div class="raid-content" id="ri-team">
        <?php 
        if( $team_content == TRUE ):
          echo $team_content;
        endif;
        ?>
      </div>
      <div class="raid-content" id="ri-calendar">
        <?php 
        if( $calendar_content == TRUE ):
          echo $calendar_content;
        endif;
        ?>
      </div>
      <div class="raid-content" id="ri-registry">
        <?php 
        if( $registry_content == TRUE ):
          echo $registry_content; 
        endif;
        ?>
      </div>
      <div class="raid-content" id="ri-jobs">
        <?php 
        if( $job_content == TRUE ):
          echo $job_content; 
        endif;
        ?> 
      </div>
      <div class="raid-content" id="ri-transfer">
        <?php 
        if( $transfer_content == TRUE ):
          echo $transfer_content; 
        endif;
        ?> 
      </div>
      <div class="raid-content" id="ri-dismissal">
        <?php 
        if( $dismissal_content == TRUE ):
          echo $dismissal_content; 
        endif;
        ?>
      </div>
    </div>
  </div>
</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>