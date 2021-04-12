<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
  
  <div class="container">
      <article class="post page">
        <h2 style="color: #344C90; font-size:2rem; text-align:center;"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </article>
    </div><!-- ./ container -->
  
<?php
  endwhile;
else: 
  echo  '<p>No content found</p>';
  echo '</div>';
endif;
?>



<?php get_footer(); ?>