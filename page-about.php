<?php get_header(); ?>

<section class="showcase-page-about">
  <div class="showcase-img">
    <img style="max-height: 300px; width:100%; object-fit: cover;" src="<?php echo get_template_directory_uri(); ?>/img/about_01.jpg" alt="Top page showcase">
  </div>
</section>

<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>

    <div class="container">

      <div class="about-page-title"><?php the_title(); ?></div>
      <div class="about-page-wrap">
        <table class="company-list">
          <tr>
            <th>会社名</th>
            <td>Sky Consulting</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>坂本　哲哉</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2018年</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>2000万円</td>
          </tr>
          <tr>
            <th>従業員</th>
            <td>8人</td>
          </tr>
          <tr>
            <th class="last-td">取引先銀行</th>
            <td class="last-td">三菱UFJ銀行、みずほ銀行等</td>
          </tr>
        </table>
      </div>


      <section class="ourTeamIntro">
      <h2 class="ourTeamTitle">私たちのチーム</h2>
      <div class="outTeamWrap">
        <div class="ourTeamMember">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_02.jpg" alt="Our team member">
          <div class="ourTeamMemberName is-center">坂本　哲哉</div>
          <div class="memberTitle is-center">代表取締役</div>
          <p class="memberDescription">Sky Consultingの社長を務めております。AKRコンサルティング会社に8年務め、その後独立。</p>
        </div>
        <div class="ourTeamMember">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_03.jpg" alt="Our team member">
          <div class="ourTeamMemberName is-center">Rika Anderson</div>
          <div class="memberTitle is-center">COO</div>
          <p class="memberDescription">坂本と同じコンサル会社で経験をつみ、Sky ConsultingでCOOに就任。</p>
        </div>
        <div class="ourTeamMember">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about_04.jpg" alt="Our team member">
          <div class="ourTeamMemberName is-center">Camiley Hamilton</div>
          <div class="memberTitle is-center">Sales Representative</div>
          <p class="memberDescription">前職では、ハミルトンコンサルで営業部長をしており、現在は営業部隊を取り締まるSales Rep。</p>
        </div>
        
      </div>
      </section>


    <section class="aboutAccess">
    <h2 class="aboutAccessTitle">アクセス</h2>
    <dl class="aboutAccessAddress">
      <dt>所在地</dt>
      <dd>〒160-0007 東京都新宿区西新宿２丁目2８−１3</dd>
    </dl>

    <div class="googleMap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.5000878687797!2d139.69028271568814!3d35.689309480192485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd4b71a37a1%3A0xf1665c37f38661e8!2z5p2x5Lqs6YO95bqB!5e0!3m2!1sja!2sjp!4v1609121329072!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </section>




    </div><!-- ./ container -->
<?php
  endwhile;
else :
  echo  '<p>No content found</p>';
  echo '</div>';
endif;
?>



<?php get_footer(); ?>