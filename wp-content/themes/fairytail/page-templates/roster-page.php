<?php
/**
 * Template Name: Roster Page Template
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
        
        <div class="roster-wrap">
          <a href="javascript:void(0);" id="roster-fc" class="roster-link btn-class text-indent border-radius">Free Company</a>
          
         <table class="roster-table">
          <colgroup>
              <col width=""/>
              <col width=""/>
              <col width="100"/>
              <col width="100"/>
              <col width="150"/>
          </colgroup>
          <thead>
              <tr>
                  <th class="mobile-first">Name</th>
                  <th class="mobile-second">Joined</th>
                  <th class="mobile-third">Primary</th>
                  <th class="mobile-fourth">Secondary</th>
                  <th class="mobile-fifth">Grand Company</th>
              </tr>
          </thead>
          <tbody>
          <?php
          // second way to get the fields
     
          // get_group will retunr an array of all the groups and the group's fields
          // the parameter for this function is the group's name
          $fcentries = get_group('roster_member_entry', $post_id=95);
          // to see how the array is formed you can use pr($members);
          // the way the array is formed is
          // [group index][field name][field index]
          // The image fields in the array have one more level where the letter "original" and "thumb" which will show
          // the original or the thumbnail image
          foreach($fcentries as $fcentry){
			$lodestone = $fcentry['roster_member_lodestone_link'][1];
            echo "<tr>";  
            echo "<td class='mobile-first'><a href='$lodestone'>".$fcentry['roster_member_name'][1]."</a></td>";
            echo "<td class='mobile-second'>".$fcentry['roster_member_join_date'][1]."</td>";
            echo "<td class='job mobile-third'><span class='".$fcentry['roster_member_primary'][1]." btn-class text-indent margin-auto'>'".$fcentry['roster_member_primary'][1]."'</span></td>";
            echo "<td class='job mobile-fourth'><span class='".$fcentry['roster_member_secondary'][1]." btn-class text-indent margin-auto'>'".$fcentry['roster_member_secondary'][1]."'</span></td>";
            echo "<td class='company mobile-fifth'><span class='".$fcentry['roster_member_grand_company'][1]." btn-class text-indent margin-auto'>'".$fcentry['roster_member_grand_company'][1]."'</span></td>";
            echo "</tr>";
          }
          ?>
          </tbody>
          </table>
         
		</div><!--roster-wrap-->
        
        <div class="roster-wrap">
          <a href="javascript:void(0);" id="roster-ls" class="roster-link btn-class text-indent border-radius">Linkshell</a>
          
          <table class="roster-table">
          <colgroup>
              <col width=""/>
              <col width=""/>
              <col width="100"/>
              <col width="100"/>
              <col width="150"/>
          </colgroup>
          <thead>
              <tr>
                  <th class="mobile-first">Name</th>
                  <th class="mobile-second">Joined</th>
                  <th class="mobile-third">Primary</th>
                  <th class="mobile-fourth">Secondary</th>
                  <th class="mobile-fifth">Grand Company</th>
              </tr>
          </thead>
          <tbody>
          <?php
          // second way to get the fields
     
          // get_group will retunr an array of all the groups and the group's fields
          // the parameter for this function is the group's name
          $lsentries = get_group('roster_member_entry', $post_id=94);
          // to see how the array is formed you can use pr($members);
          // the way the array is formed is
          // [group index][field name][field index]
          // The image fields in the array have one more level where the letter "original" and "thumb" which will show
          // the original or the thumbnail image
          foreach($lsentries as $lsentry){
			$lodestone = $lsentry['roster_member_lodestone_link'][1];
            echo "<tr>";  
            echo "<td class='mobile-first'><a href='$lodestone'>".$lsentry['roster_member_name'][1]."</a></td>";
            echo "<td class='mobile-second'>".$lsentry['roster_member_join_date'][1]."</td>";
            echo "<td class='job mobile-third'><span class='".$lsentry['roster_member_primary'][1]." btn-class text-indent margin-auto'>'".$lsentry['roster_member_primary'][1]."'</span></td>";
            echo "<td class='job mobile-fourth'><span class='".$lsentry['roster_member_secondary'][1]." btn-class text-indent margin-auto'>'".$lsentry['roster_member_secondary'][1]."'</span></td>";
            echo "<td class='company mobile-fifth'><span class='".$lsentry['roster_member_grand_company'][1]." btn-class text-indent margin-auto'>'".$lsentry['roster_member_grand_company'][1]."'</span></td>";
            echo "</tr>";
          }
          ?>
          </tbody>
          </table>
         
		</div><!--roster-wrap-->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>