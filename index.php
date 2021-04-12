<?php get_header(); ?>

<section class="indexTopImage">
  <div class="showcase-img-blog">
    <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/blog_01.jpg" alt="Top page showcase">
    <p class="categoryName">投稿記事</p>
  </div>
</section>




<div class="container">
  <div class="flex-Blog-Wrap">
    <div class="leftBlogWrap">
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
  <div class="pagination">
    <div class="container ">
      <div class="paginationWrap">
        <div class="blogArrow">
        <?php 
            $link = get_previous_posts_link('< 前のページ'); 
            if($link){
              $link = str_replace('<a' , '<a class="blogArrowBtn"',$link);
              echo $link;
            }
            ?>
        </div>
        <div class="blogArrow">
          <?php 
            $link = get_next_posts_link('次のページ >'); 
            if($link){
              $link = str_replace('<a' , '<a class="blogArrowBtn"',$link);
              echo $link;
            }
            
            ?>
        </div>
      </div>
    </div>
  </div>
    </div>
    <div class="rightBlogWrap">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>