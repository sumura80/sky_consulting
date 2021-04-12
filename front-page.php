<?php get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <!-- <div class="container">
      <article class="post page">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      </article>
  </div> -->
    <!-- ./ container -->

    <section class="showcase">
      <div class="showcase-img">
        <img style="max-height: 300px; width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/showcase_top_01.jpg" alt="Top page showcase">
      </div>
    </section>





    <section class="top-page-news">
      <h2 class="section-title">お知らせ <span class="section-title-sub">News</span></h2>
      <!-- Wp_Query to get News information -->

      <?php
      $newsPosts = new WP_Query('cat=7&posts_per_page=5');
      if ($newsPosts->have_posts()) :
        while ($newsPosts->have_posts()) : $newsPosts->the_post();
      ?>
        <dl class="news-list">
          <dt><?php the_time('Y.m.d'); ?></dt>
          <dd><a href="<?php the_permalink();?>"><?php the_title(); ?></a></dd> 
        </dl>

   

      <?php endwhile;
      endif;
      // WP_Query stops setting here 
      wp_reset_postdata();
      ?>

    </section>



    <section class="servicesIntro container">
      <h2 class="section-title">事業内容 <span class="section-title-sub">Services</span></h2>
      <div class="servicesIntroWrap">
        <div class="serviceCard">
          <img src="<?php echo get_template_directory_uri() . '/img/service_02.jpg'; ?>" class="serviceImg">
          <div class="serviceCardBody">
            <h3 class="is-center">SEO対策</h3>
            <p class="serviceDescription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, aspernatur!</p>
            <p class="main-btn"><a href="#">詳しく見る</a></p>
          </div>
        </div><!-- end of serviceCard -->
        <div class="serviceCard">
          <img src="<?php echo get_template_directory_uri() . '/img/service_01.jpg'; ?>" class="serviceImg">
          <div class="serviceCardBody">
            <h3 class="is-center">ホームページ作成</h3>
            <p class="serviceDescription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, aspernatur!</p>
            <p class="main-btn"><a href="#">詳しく見る</a></p>
          </div>
        </div><!-- end of serviceCard -->
        <div class="serviceCard">
          <img src="<?php echo get_template_directory_uri() . '/img/service_03.jpg'; ?>" class="serviceImg">
          <div class="serviceCardBody">
            <h3 class="is-center">Webコンサルティング</h3>
            <p class="serviceDescription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, aspernatur!</p>
            <p class="main-btn"><a href="#">詳しく見る</a></p>
          </div>
        </div><!-- end of serviceCard -->
      </div>
    </section>



    <section class="ourValue">
      <div class="container ourValueWrap">
        <h2 class="section-title">私たちを選ぶ理由 <span class="section-title-sub">Our Value</span></h2>
        <div class="twoColumnWrap">
          <div class="ourValueInfo">
            <p class="ourValueImpact">プラニングからWeb制作までオールインワンで提供
              SEOにも力を入れ集客をアップします</p>
            <p class="ourValueDescription">お客様のブランドを最大限に生かし、集客に結びつくWebサイトを制作します。
              動画などにも力を入れ他社との差別化をはかります。</p>
          </div>
          <div class="ourValueImg">
            <img src="<?php echo get_template_directory_uri() . '/img/value_01.jpg'; ?>" class="serviceImg">
          </div>
        </div><!-- ./ twoColumnWrap -->
      </div><!-- ./ ourValueWrap -->
    </section>

    <div class="servicePricingBtnWrap">
      <p class="servicePricingBtn is-center">
        <a href="#">サービス料金</a>
      </p>
    </div>




<?php
  endwhile;
else :
  echo  '<p>No content found</p>';
  echo '</div>';
endif;
?>



<?php get_footer(); ?>