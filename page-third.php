  <?php
  /*
Template Name: third
*/
  get_header();
  ?>
  <main class="p4">
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
                <li><a href="<?php echo esc_url(home_url('/')); ?>first">>> 座談会vol.1</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>second">>> 座談会vol.2</a></li>
                <li class="bg_pale_cream"><a href="<?php echo esc_url(home_url('/')); ?>third">>> 座談会vol.3</a></li>
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
                  <li><a href="<?php echo esc_url(home_url('/')); ?>first">>> 座談会vol.1</a></li>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>second">>> 座談会vol.2</a></li>
                  <li class="bg_pale_cream"><a href="<?php echo esc_url(home_url('/')); ?>third">>> 座談会vol.3</a></li>
                </ul>
              </div>
              <!--ここまでメニュー-->
            </div>
          </div>
        </header>
        <div class="head_img"><img src="<?php echo get_theme_file_uri('assets/img/p4_head_img.svg'); ?>" alt="" /></div>
      </div>
    </section>
    <section class="project_member_sec bg_2col">
      <div class="sec_inner">
        <div class="member_top_img"><img src="<?php echo get_theme_file_uri('assets/img/p4_member_top.svg'); ?>" alt="" /></div>
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
          <p class="dsc_s">
            <br>
            目元に特化することに12年以上携わってきた会社が、今までの知識や経験を元にこれまでになかったまつ毛美容液を作ることになり、発足したプロジェクト。今回座談会第3回は前回からさらに1カ月間試作品のまつ毛美容液をプロジェクトメンバーそれぞれが試しての報告会、そして、<br><br>
          </p>
          <p class="dsc_s bg_pale_cream">
            ① 太さがもう少し出て欲しい<br>
            ②もう少し早く反応が出て欲しい
          </p>
          <p class="dsc_s">
            <br>をもとに、開発者が試行錯誤の上、最終段階のまつ毛美容液を完成させたという話の二本立てでトークが進みました。 第二回目座談会はその試作品に関しての意見交換からスタートします。<br><br>
          </p>
          <p class="p4_session01"><img src="<?php echo get_theme_file_uri('assets/img/p4_session01.svg'); ?>" alt="" /></p>
          <p class="p4_session02"><img src="<?php echo get_theme_file_uri('assets/img/p4_session02.svg'); ?>" alt="" /></p>
          <p class="p4_session03"><img src="<?php echo get_theme_file_uri('assets/img/p4_session03.svg'); ?>" alt="" /></p>
          <p class="p4_session04"><img src="<?php echo get_theme_file_uri('assets/img/p4_session04.svg'); ?>" alt="" /></p>
          <p class="p4_session05"><img src="<?php echo get_theme_file_uri('assets/img/p4_session05.svg'); ?>" alt="" /></p>
        </div>
        <section class="point_sec">
          <div class="sec_inner bg_white">
            <div class="point_img"><img src="<?php echo get_theme_file_uri('assets/img/p4_point.svg'); ?>" alt="" /></div>
          </div>
        </section>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>