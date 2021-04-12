<footer class="site-footer">

  <!-- <div class="footer-widgets">
  <?php if (is_active_sidebar('footer1')) : ?>
    <div class="footer-widget-area">
      <?php dynamic_sidebar('footer1'); ?>
    </div>
  <?php endif ?>

  <?php if (is_active_sidebar('footer2')) : ?>
    <div class="footer-widget-area">
      <?php dynamic_sidebar('footer2'); ?>
    </div>
  <?php endif ?>
</div> -->

  <nav class="site-nav">
    <?php $args = array(
      'theme_location' => 'footernav'
    ); ?>
    <div class="footerNavWrap">
      <?php wp_nav_menu($args); ?>
    </div>



  </nav>
  <p class="footer-copy"><?php bloginfo('name'); ?> 2020</p>
</footer>





</div><!-- ./ main-wrap  -->
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
  $(function(){
    $("#js-navHamburgerBtn").click(function(){
      $('body').toggleClass('show');
    });
  });
</script>
</body>

</html>