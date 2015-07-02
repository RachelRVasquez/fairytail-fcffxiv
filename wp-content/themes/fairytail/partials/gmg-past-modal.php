<!-- == PAST TASK MODAL ===================================== -->
<div class="remodal" data-remodal-id="past-modal" role="dialog">
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
      foreach($chall_entries as $past_entry): //past challenges only
        if( $past_entry['challenge_entry_challenge_type'][1] == 'Collector' ):
          global $task_post_id;
          $task_post_id = intval($past_entry['challenge_entry_assign_task'][1]);

        endif;
      endforeach; 

      /*
      * Use global ID pulled from challenge group related field
      * Create another foreach loop to grab the group fields for the tasks
      */

      $past_chall_tasks = get_group('task_entry', $post_id=$task_post_id);
      foreach($past_chall_tasks as $past_chall_task):
        $task_ach_id = intval($past_chall_task['task_entry_achievement_id'][1]); //achievement ID
        $task_ach_link = get_the_permalink($task_ach_id); //achievement link
        echo "<tr>";  
        echo "<td class='mobile-first'>" . $past_chall_task['task_entry_task_name'][1] . "</td>";
        echo "<td class='mobile-second'>" . $past_chall_task['task_entry_task_desc'][1] . "</td>";
        echo "<td class='mobile-third'><div class='" . $past_chall_task['task_entry_task_difficulty'][1] . "-stars margin-auto'></div></td>";
        echo "<td class='mobile-fourth'><a href='" . $task_ach_link . "'>" . get_the_post_thumbnail( $task_ach_id, 'thumbnail' ) . "</a></td>";
        echo "</tr>"; 
      endforeach;
      ?>  
      </tbody>
    </table>
    
  </div>
</div>