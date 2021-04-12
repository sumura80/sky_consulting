<?php get_header(); ?>
<section class="showcase-page-services">
  <div class="showcase-img">
    <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/services_page_01.jpg" alt="Top page showcase">
  </div>
</section>

<div class="container">
  <section class="serviceBoxes">
    <h2 class="section-title serviceBoxesTitel"><?php the_title(); ?> <span class="section-title-sub">Services</span></h2>
    <div class="serviceListWrapTop">
      <div class="serviceListCard">
        <img src="<?php echo get_template_directory_uri(); ?>/img/services_page_02.jpg" alt="Top page showcase">
        <p class="serviceListTitle">戦略立案・Web制作</p>
        <p class="serviceListDescription">集客に導くようなWebサイトを構築しコンバージョンにつなげます。</p>
      </div>

      <div class="serviceListCard">
        <img src="<?php echo get_template_directory_uri(); ?>/img/services_page_03.jpg" alt="Top page showcase">
        <p class="serviceListTitle">動画編集</p>
        <p class="serviceListDescription">Adobeの編集ソフトを使い、視覚的にお客様に内容を理解してもらいやすくなります。</p>
      </div>
    </div>

    <div class="serviceListWrapBottom">
      <div class="serviceListCard">
        <img src="<?php echo get_template_directory_uri(); ?>/img/services_page_04.jpg" alt="Top page showcase">
        <p class="serviceListTitle">英語翻訳</p>
        <p class="serviceListDescription">ネイティブスピーカーによる翻訳で、インバウンドにも対応し、海外のお客様の流入を増やします。</p>
      </div>

      <div class="serviceListCard">
        <img src="<?php echo get_template_directory_uri(); ?>/img/services_page_05.jpg" alt="Top page showcase">
        <p class="serviceListTitle">SEO & MEO対策</p>
        <p class="serviceListDescription">SEOやMEO対策を行い、サイトだけでなく地図を見てオフラインでの流入も増やしましょう。</p>
      </div>
    </div>
  </section>



  <section class="allinOne">
    <h3 class="allinOneTitle is-center">オールインワンソリューション</h3>
    <p class="allinOneDescription">
      Sky Consultingでは、戦略立案から、Webサイト構築・翻訳・英語翻訳・SEOまで通してサービスをご提供いたします。
      <br>
      お客様に最適なソリューションを持って、課題解決に注力いたします。
    </p>
  </section>

  <section class="servicePriceTable">
    <h2 class="priceTableTitle">サービス料金一覧</h2>
    <table class="pariceTable">
      <tr>
        <th>サービス名</th>
        <th>初期費用</th>
        <th>サービス内容</th>
      </tr>

      <tr>
        <td>Web制作</td>
        <td>8万円〜</td>
        <td class="priceTableContent">結果につながるホームページ作成をリーズナブルにご提供</td>
      </tr>

      <tr>
        <td>動画編集</td>
        <td>3万円〜</td>
        <td class="priceTableContent">視覚的にインパクトのある動画でお客様に印象を残します</td>
      </tr>

      <tr>
        <td>英語翻訳</td>
        <td>5万円〜</td>
        <td class="priceTableContent">インバウンドなど外国のお客様を呼び込むのに最適</td>
      </tr>

      <tr>
        <td>SEO & MEO 対策</td>
        <td>2万円〜</td>
        <td class="priceTableContent">Googleマップに表示されるMEOは集客には圧倒的に有効です</td>
      </tr>

    </table>
  </section>



</div><!-- ./ container -->
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <div class="container">


    </div><!-- ./ container -->
<?php
  endwhile;
else :
  echo  '<p>No content found</p>';
  echo '</div>';
endif;
?>



<?php get_footer(); ?>