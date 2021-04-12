<?php get_header(); ?>

<div class="flex-container">

  <div class="main-column">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('content');
      endwhile;
    else :
      echo  '<p>No content found</p>';
      echo  '</div>'; 
    endif;
    ?>
  </div><!-- ./ main-column-->


<?php get_sidebar(); ?>


</div><!-- Flex container -->

<?php get_footer(); ?>