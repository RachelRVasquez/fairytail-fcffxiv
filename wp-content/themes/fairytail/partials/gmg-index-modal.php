<!-- == GMG INDEX MODAL ===================================== -->
<div class="remodal" data-remodal-id="index-modal" role="dialog">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="remodal-content index-content">

    <?php while ( have_posts() ) : the_post();

    the_content();

    endwhile; // end of the loop. ?>

  </div>
</div>