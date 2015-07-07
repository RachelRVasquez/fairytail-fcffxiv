<?php global $art_count; ?>
<!-- == ARTISAN TASK MODAL ===================================== -->
<div class="remodal" data-remodal-id="artisan-modal-<?php echo $art_count; ?>" role="dialog">
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
          $task_post_id = intval($art_entry['challenge_entry_assign_task'][1]);
          print_task_entry( $task_post_id );
      ?>
      </tbody>
    </table>
    
  </div>
</div>