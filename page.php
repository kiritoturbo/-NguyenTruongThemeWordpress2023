<?php get_header() ?>
<!-- get feild   -->
<main class="main" <?php body_class(); ?>>
  <section class="hero" style="background-image: url(<?php header_image(); ?> );">
    <div class="hero-content">
      <h1 class="heading">
        <!-- <?php echo esc_html(get_field('dong_so_1_chu_to')); ?> -->
        <?php
          global $post;
          $value = get_post_meta($post->ID, 'companyName', true);
          echo $value;
          // die();
        ?>
      </h1>
      <p class="description">
        <!-- <?php echo esc_html(get_field('dong_so_2_chu_to')); ?> -->
        <?php
          global $post;
          $descriptCompany = get_post_meta($post->ID, 'descriptCompany', true);
          echo $descriptCompany;
          // die();
        ?>
      </p>
      <a href="" class="link">Tìm hiểu thêm</a>
      <a href="" class="link-arrow">
        <svg width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.29289 18.7071C7.68342 19.0976 8.31658 19.0976 8.70711 18.7071L15.0711 12.3431C15.4616 11.9526 15.4616 11.3195 15.0711 10.9289C14.6805 10.5384 14.0474 10.5384 13.6569 10.9289L8 16.5858L2.34315 10.9289C1.95262 10.5384 1.31946 10.5384 0.928933 10.9289C0.538408 11.3195 0.538408 11.9526 0.928933 12.3431L7.29289 18.7071ZM7 4.37114e-08L7 18L9 18L9 -4.37114e-08L7 4.37114e-08Z" fill="white" />
        </svg>
      </a>
    </div>
    <div class="hero-img">
      <img src="<?php bloginfo('template_directory') ?>/images/hero-img.png" alt="" />
    </div>
  </section>
  <section class="about">
    <div class="about-img">
      <img src="<?php bloginfo('template_directory') ?>/images/about-img.png" alt="" />
    </div>
    <div class="about-content">
      <h2 class="slogan">Chúng tôi là</h2>
      <div class="wrap">
        <h2 class="heading"><?php echo esc_html(get_field('ten_cong_ty')); ?></h2>
        <div class="content-item">
          <h2 class="title"><?php echo esc_html(get_field('title_content_1')); ?></h2>
          <p class="description">
            <?php echo esc_html(get_field('content_title_1')); ?>
          </p>
        </div>
        <div class="content-item">
          <h2 class="title"><?php echo esc_html(get_field('title_content_2')); ?></h2>
          <p class="description">
            <?php echo esc_html(get_field('content_title_2')); ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="activity">
    <div class="circle">
      <img src="<?php bloginfo('template_directory') ?>/images/activity-circle.png" alt="" />
    </div>
    <div class="line-first">
      <img src="<?php bloginfo('template_directory') ?>/images/activity-line-first.png" alt="" />
    </div>
    <div class="line-second">
      <img src="<?php bloginfo('template_directory') ?>/images/activity-line-second.png" alt="" />
    </div>
    <h2 class="title">hoạt động của chúng tôi</h2>
    <h1 class="heading">Akadon có gì khác biệt</h1>
    <div class="activity-list">
      <div class="activity-item">
        <div class="wrapper">
          <div class="item-top">
            <img src="<?php bloginfo('template_directory') ?>/images/activity-connect.png" alt="" />
            <div class="wrap">
              <h2 class="name">Kết nối</h2>
            </div>
          </div>
          <div class="item-bottom">
            <p class="desc">
              Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn toàn
              <strong>MIỄN PHÍ</strong>
            </p>
          </div>
        </div>
      </div>
      <div class="activity-item">
        <div class="wrapper">
          <div class="item-top">
            <img src="<?php bloginfo('template_directory') ?>/images/activity-study.png" alt="" />
            <div class="wrap">
              <h2 class="name">Quản lý học tập</h2>
            </div>
          </div>
          <div class="item-bottom">
            <p class="desc">
              Nền tảng quản lý lớp học online toàn diện với nhiều tiện ích
              thông minh
            </p>
          </div>
        </div>
      </div>
      <div class="activity-item">
        <div class="wrapper">
          <div class="item-top">
            <img src="<?php bloginfo('template_directory') ?>/images/activity-book.png" alt="" />
            <div class="wrap">
              <h2 class="name">Tri thức</h2>
            </div>
          </div>
          <div class="item-bottom">
            <p class="desc">
              Tiếp cận tri thức không giới hạn không gian và thời gian
            </p>
          </div>
        </div>
      </div>
      <div class="activity-item">
        <div class="wrapper">
          <div class="item-top">
            <img src="<?php bloginfo('template_directory') ?>/images/activity-medal.png" alt="" />
            <div class="wrap">
              <h2 class="name">Chất lượng</h2>
            </div>
          </div>
          <div class="item-bottom">
            <p class="desc">
              Quy trình tuyển chọn gia sư chặt chẽ cùng quy trình dạy và học
              đơn giản, tiện lợi
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('event'); ?>
  <?php get_template_part('contact'); ?>
</main>

<!-- Get post mặt định -->
<!-- <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <?php echo get_field('homepage'); ?>
      <?php endwhile;
      else : ?>
      <?php endif; ?> -->
      
     <?php if(paginate_links()!='') {?>
        <div class="quatrang">
          <?php
          global $wp_query;
          $big = 999999999;
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'prev_text'    => __('« Mới hơn'),
            'next_text'    => __('Tiếp theo »'),
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
            ) );
            ?>
        </div>
      <?php } ?>


<?php get_footer() ?>