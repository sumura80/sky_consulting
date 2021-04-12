<?php get_header(); ?>
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  
    <div class="container">
      <article class="post single-post-wrap">
         <?php 
        $categories = get_the_category();
        $separator = ", ";
        $output = "";

        // if ($categories) {
        //     foreach ($categories as $category) {
        //         $output .= '<a href="
        //           '. get_category_link($category->term_id).'
        //         ">' .$category->cat_name. '</a>' .$separator;
        //     }
        //   echo trim($output, $separator);
        // }
          ?>
      </p>
        <?php the_post_thumbnail('banner-image'); ?>
        <h2 class="single-title"><?php the_title(); ?></h2>
        <p class="post-info"><?php the_time('F jS, Y g:i a ');?> by <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
       
        <?php the_content(); ?>  
       
      </article>
      </div><!-- ./ container -->
<?php
  endwhile;
else: 
  echo  '<p>No content found</p>';
endif;
?>



<?php get_footer(); ?>