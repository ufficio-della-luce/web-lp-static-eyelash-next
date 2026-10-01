<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EyelashNEXT
 */

?>
<footer class="bg_pale_cream">
  <p class="footer_project_img"><img src="<?php echo get_theme_file_uri('assets/img/footer_project_img.svg'); ?>" alt="" /></p>
  <p class="footer_logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_theme_file_uri('assets/img/footer_logo.svg'); ?>" alt="" />
    </a>
  </p>
  <div class="footer_link">
    <ul class="flex f_cc wrap">
      <li><a href="<?php echo esc_url(home_url('/')); ?>">>>TOP（digest）</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>first">>> 座談会vol.1</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>second">>> 座談会vol.2</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>third">>> 座談会vol.3</a></li>
    </ul>
  </div>
</footer>





<script>
  $(document).ready(function() {
    $('.slider').slick({
      infinite: true, //スライドのループ有効化
      centerMode: true, //要素を中央寄せ
      centerPadding: '30%', //両サイドの見えている部分のサイズ
      autoplay: true, //自動再生
      variableWidth: true, //画面幅自由設定

      responsive: [{
        breakpoint: 768,
        settings: {
          infinite: true, //スライドのループ有効化
          centerMode: true, //要素を中央寄せ
          centerPadding: '0%', //両サイドの見えている部分のサイズ
          autoplay: true, //自動再生
          variableWidth: true //画面幅自由設定
        }
      }]
    });
  });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>