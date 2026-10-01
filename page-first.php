  <?php
  /*
Template Name: first
*/
  get_header();
  ?>
  <main class="p2">

    <section class="head_sec bg_img">
      <div class="sec_inner">
        <header>
          <div class="header_menu flex to_clm ">
            <div class="header_logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_theme_file_uri('assets/img/header_logo.svg'); ?>" alt="" />
              </a>
            </div>
            <div class="nav_menu pc">
              <ul class="flex f_cc wrap">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">>>TOP（digest）</a></li>
                <li class="bg_pale_cream"><a href="<?php echo esc_url(home_url('/')); ?>first">>> 座談会vol.1</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>second">>> 座談会vol.2</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>third">>> 座談会vol.3</a></li>
              </ul>
            </div>
            <div class="hamburger-menu sp">
              <input type="checkbox" id="menu-btn-check">
              <label for="menu-btn-check" class="menu-btn"><span></span></label>
              <!--ここからメニュー-->
              <div class="menu-content">
                <label for="menu-btn-check" class="close_btn"><span></span></label>
                <ul>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>">>>TOP（digest）</a></li>
                  <li class="bg_pale_cream"><a href="<?php echo esc_url(home_url('/')); ?>first">>> 座談会vol.1</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>second">>> 座談会vol.2</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>third">>> 座談会vol.3</a></li>
                </ul>
              </div>
              <!--ここまでメニュー-->
            </div>
          </div>
        </header>
        <div class="head_img"><img src="<?php echo get_theme_file_uri('assets/img/p2_head_img.svg'); ?>" alt="" /></div>
      </div>
    </section>


    <section class="project_member_sec bg_2col">
      <div class="sec_inner">
        <div class="member_top_img"><img src="<?php echo get_theme_file_uri('assets/img/member_top.svg'); ?>" alt="" /></div>
        <p class="member_name txt_c">
          <img src="<?php echo get_theme_file_uri('assets/img/member_names.svg'); ?>" alt="" />
          <!-- 参加者プロフィール<br />
        右から小西翼さん、濱田有紀さん、青野未来さん、松本亜希さん、木村安梨沙さん、<br />
        Erikaさん、大川明梨菜さん<br />
        開発プロジェクトリーダーに伊波那津子<br /> -->
        </p>

      </div>
    </section>

    <section class="session_sec bg_img">
      <div class="sec_inner">
        <div class="contents_wrap_inner bg_white">
          <p class="dsc_s txt_c">
            目元に特化することに 12 年以上携わってきた会社が、<br />
            今までの知識や経験を元にこれまで になかったまつ毛美容液を作ることになり、発足したプロジェクト。<br />
            今回は第1回目の座談会。その模様をお届けします。<br /><br>
          </p>
          <h2 class="bg_pale_cream">
            「どんなまつ毛美容液が欲しい？」<br />
            試作開発に向けての白熱した意見交換会
          </h2>
          <p class="p2_session01"><img src="<?php echo get_theme_file_uri('assets/img/p2_session01.svg'); ?>" alt="" /></p>
          <p class="p2_session_img01"><img src="<?php echo get_theme_file_uri('assets/img/p2_session_img01.svg'); ?>" alt="" /></p>
          <p class="p2_session02"><img src="<?php echo get_theme_file_uri('assets/img/p2_session02.svg'); ?>" alt="" /></p>
          <p class="p2_session_img02"><img src="<?php echo get_theme_file_uri('assets/img/p2_session_img02.svg'); ?>" alt="" /></p>
          <p class="p2_session03"><img src="<?php echo get_theme_file_uri('assets/img/p2_session03.svg'); ?>" alt="" /></p>
          <p class="p2_session04"><img src="<?php echo get_theme_file_uri('assets/img/p2_session04.svg'); ?>" alt="" /></p>
          <p class="p2_session05"><img src="<?php echo get_theme_file_uri('assets/img/p2_session05.svg'); ?>" alt="" /></p>
        </div>

        <section class="point_sec bg_img">
          <div class="sec_inner bg_white">
            <div class="point_img"><img src="<?php echo get_theme_file_uri('assets/img/p2_point.svg'); ?>" alt="" /></div>
          </div>
        </section>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>