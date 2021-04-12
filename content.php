  <div class="container">

    <article class="post">
    <div class="postWrap">
      
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="post-info"><?php the_time('Y年 m月 j日 g:i a '); ?> <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
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
        ?>カテゴリー
      </p>

      <div class="post-wrap">
        <div class="post-featured-image">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
        </div>
        <div class="post-content  <?php if (has_post_thumbnail()) { ?> has_thumbnail <?php } ?>">
          <?php echo get_the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">もっと読む>></a>
        </div>
      </div>

      </div>
    </article>
  </div><!-- ./ container -->