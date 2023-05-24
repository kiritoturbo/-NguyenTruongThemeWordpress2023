<footer class="footer">
      <div class="wrap">
        <div class="footer-navbar">
          <img class="logo" src="<?php bloginfo('template_directory') ?>/images/logo-outline.png" alt="" />
          <!-- <ul class="list"> -->
                    <?php wp_nav_menu( 
                        array( 
                                'theme_location' => 'topmenu', 
                                'container' => 'false', 
                                'menu_id' => 'nav-list', 
                                'menu_class' => 'nav-list'
                            ) 
                    ); ?>
            <!-- <li class="item">
              <a href="" class="item-link">Trang chủ</a>
            </li>
            <li class="item">
              <a href="" class="item-link">Về chúng tôi</a>
            </li>
            <li class="item">
              <a href="" class="item-link">Đội ngũ sáng lập</a>
            </li>
            <li class="item">
              <a href="" class="item-link">Sản phẩm</a>
            </li>
            <li class="item">
              <a href="" class="item-link">Akadon News</a>
            </li> -->
          <!-- </ul> -->
        </div>
        <div class="footer-content">
          <h2 class="heading">Công ty TNHH Công nghệ Ứng dụng AKADON</h2>
          <div class="item">
            <p class="text">Mã số doanh nghiệp:</p>
            <p class="text">0107979500</p>
          </div>
          <div class="item">
            <p class="text">Đại diện doanh nghiệp:</p>
            <p class="text">Văn Thị Thu Nhiên</p>
          </div>
          <div class="item">
            <p class="text">Chức vụ:</p>
            <p class="text">Giám đốc điều hành</p>
          </div>
        </div>
        <div class="line"></div>
        <div class="footer-bottom">
          <p class="text">2020 Alright Reserved</p>
          <div class="list">
            <div class="item">
              <img src="<?php bloginfo('template_directory') ?>/images/footer-facebook.png" alt="" />
            </div>
            <div class="item">
              <img src="<?php bloginfo('template_directory') ?>/images/footer-instagram.png" alt="" />
            </div>
            <div class="item">
              <img src="<?php bloginfo('template_directory') ?>/images/footer-twitter.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
