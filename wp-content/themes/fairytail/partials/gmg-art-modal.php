<!-- == ARTISAN TASK MODAL ===================================== -->
<div class="remodal" data-remodal-id="artisan-modal" role="dialog">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="remodal-content">
    <table class="gmg-table">
      <thead>
          <tr>
              <th class="mobile-first">Task</th>
              <th class="mobile-second">Objective</th>
              <th class="mobile-third">Difficulty</th>
              <th class="mobile-fourth">Achievement</th>
          </tr>
      </thead>
      <tbody>
      <?php
      

      foreach($chall_entries as $art_entry): //artisan challenges only
      if( $art_entry['challenge_entry_challenge_type'][1] == 'Artisan' ):
          $task_post_id = intval($art_entry['challenge_entry_assign_task'][1]);
          //I GET MORE THAN ONE ID HERE IF I VAR_DUMP $task_post_id
          break;
          //TEST THIS WITH DIE();
      endif;
      endforeach;

      //OUT HERE THOUGH VAR_DUMP $task_post_id ONLY GIVES ME FIRST ID?
      //I WANT THE SECOND GROUP'S LOOPING HERE
      //AND EACH ID GRABBED FROM THE FIRST GROUP WITHOUT BEING IN THAT FOREACH
     print_task_entry( $task_post_id );

      /*
      * Use global ID pulled from challenge group related field
      * Create another foreach loop to grab the group fields for the tasks
      */

      // $artisan_chall_task = get_group('task_entry', $post_id=$task_post_id);
      // foreach($artisan_chall_task as $art_chall_task):
      //   $task_ach_id = intval($art_chall_task['task_entry_achievement_id'][1]); //achievement ID
      //   $task_ach_link = get_the_permalink($task_ach_id); //achievement link
      //   echo "<tr>";  
      //   echo "<td class='mobile-first'>" . $art_chall_task['task_entry_task_name'][1] . "</td>";
      //   echo "<td class='mobile-second'>" . $art_chall_task['task_entry_task_desc'][1] . "</td>";
      //   echo "<td class='mobile-third'><div class='" . $art_chall_task['task_entry_task_difficulty'][1] . "-stars margin-auto'></div></td>";
      //   echo "<td class='mobile-fourth'><a href='" . $task_ach_link . "'>" . get_the_post_thumbnail( $task_ach_id, 'thumbnail' ) . "</a></td>";
      //   echo "</tr>"; 
      // endforeach;
      ?>  
      </tbody>
    </table>
    
  </div>
</div>