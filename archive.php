<?php get_header(); ?>


<section class="archiveShowcase">
  <div class="archiveShowcaseWrap">


    <?php
    if (in_category('blog')) { //特定のカテゴリの場合
    ?>
      <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/blog_cat.jpg" alt="Top page showcase">
    <?php } elseif (in_category('news')) {  ?>
      <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/news_cat.jpg" alt="Top page showcase">
    <?php } else { //それ以外の場合 
    ?>
      <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/other_cat.jpg" alt="Top page showcase">
    <?php }
    ?>

    <p class="categoryArchiveName">
      <?php
      if (have_posts()) : ?>

        <?php
        if (is_category()) {
          single_cat_title();
        } elseif (is_tag()) {
          single_tag_title();
        } elseif (is_author()) {
          the_post();
          get_the_author();
          rewind_posts();
        } elseif (is_day()) {
          get_the_date();
        } elseif (is_month()) {
          get_the_month();
        } elseif (is_year()) {
          get_the_year();
        } else {
          echo 'Archives:';
        }
        ?>
    </p>
  </div>
</section>


<div class="container">
  <div class="flex-Archive-Wrap">
    <div class="leftArchiveWrap">

      <?php while (have_posts()) : the_post(); ?>


        <article class="eachPostBox">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="post-info"><?php the_time('F jS, Y g:i a '); ?> by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>| in
            <?php
            $categories = get_the_category();
            $separator = ", ";
            $output = "";

            if ($categories) {
              foreach ($categories as $category) {
                $output .= '<a href="
            ' . get_category_link($category->term_id) . '
          ">' . $category->cat_name . '</a>' . $separator;
              }
              echo trim($output, $separator);
            }
            ?>
          </p>
          <p>

            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">もっと読む</a>
          </p>
        </article>


    <?php
        endwhile;
      else :
        echo  '<p>No content found</p>';
        echo '</div>';
      endif;
    ?>

    </div>
    <div class="rightArchiveWrap">

      <?php get_sidebar(); ?>

    </div>
  </div>
</div>


<?php get_footer(); ?>