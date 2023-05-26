<?php get_header()?>
    <main class="main">
      <div class="wrapper details">
        <div class="astra-details-nav">
          <div class="list">
            <!-- <?php if(!is_home()){ ?> -->
              <!-- <?php
                if ( function_exists( 'yoast_breadcrumb' ) ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?> -->
            <?php the_breadcrumb(); ?>
            <!-- <?php } ?> -->
            <!-- <div class="item">
              <span>Trang chủ</span>
              <span
                ><svg
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_101_253)">
                    <path
                      d="M7.15592 6.00254L2.66675 1.51317C2.54314 1.38985 2.47514 1.22497 2.47514 1.04917C2.47514 0.873267 2.54314 0.708487 2.66675 0.584975L3.06012 0.191804C3.18353 0.068097 3.34851 -5.39957e-07 3.52431 -5.24588e-07C3.70012 -5.09219e-07 3.8649 0.068097 3.98841 0.191804L9.33348 5.53678C9.45748 5.66068 9.52539 5.82624 9.5249 6.00224C9.52539 6.17902 9.45758 6.34439 9.33348 6.46839L3.99339 11.8082C3.86987 11.9319 3.70509 12 3.52919 12C3.35339 12 3.18861 11.9319 3.065 11.8082L2.67173 11.415C2.41583 11.1591 2.41583 10.7425 2.67173 10.4867L7.15592 6.00254Z"
                      fill="#8F8F8F"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_101_253">
                      <rect
                        width="12"
                        height="12"
                        fill="white"
                        transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 12 0)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </div>
            <div class="item">
              <span>Akadon News</span>
              <span
                ><svg
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_101_253)">
                    <path
                      d="M7.15592 6.00254L2.66675 1.51317C2.54314 1.38985 2.47514 1.22497 2.47514 1.04917C2.47514 0.873267 2.54314 0.708487 2.66675 0.584975L3.06012 0.191804C3.18353 0.068097 3.34851 -5.39957e-07 3.52431 -5.24588e-07C3.70012 -5.09219e-07 3.8649 0.068097 3.98841 0.191804L9.33348 5.53678C9.45748 5.66068 9.52539 5.82624 9.5249 6.00224C9.52539 6.17902 9.45758 6.34439 9.33348 6.46839L3.99339 11.8082C3.86987 11.9319 3.70509 12 3.52919 12C3.35339 12 3.18861 11.9319 3.065 11.8082L2.67173 11.415C2.41583 11.1591 2.41583 10.7425 2.67173 10.4867L7.15592 6.00254Z"
                      fill="#8F8F8F"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_101_253">
                      <rect
                        width="12"
                        height="12"
                        fill="white"
                        transform="matrix(-1 -8.74228e-08 -8.74228e-08 1 12 0)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </span>
            </div>
            <div class="detail-title">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div> -->
          </div>
        </div>
        <div class="astra-details-content">


                    <!-- Get post mặt định -->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="heading">
                <?php the_title(); ?>
                </h1>
                <div class="child">
                    <div class="name green">tin tức</div>
                    <div class="time">
                    <span
                        ><svg
                        width="16"
                        height="16"
                        viewBox="0 0 16 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <g clip-path="url(#clip0_101_270)">
                            <path
                            d="M10.8506 9.41291L8.61975 7.73979V4.3316C8.61975 3.98891 8.34275 3.71191 8.00006 3.71191C7.65737 3.71191 7.38037 3.98891 7.38037 4.3316V8.04966C7.38037 8.24485 7.47209 8.42891 7.62825 8.54541L10.1069 10.4044C10.2185 10.4881 10.3486 10.5284 10.4781 10.5284C10.6671 10.5284 10.853 10.4435 10.9745 10.2799C11.1803 10.0066 11.1245 9.61804 10.8506 9.41291Z"
                            fill="#8F8F8F"
                            />
                            <path
                            d="M8 0C3.58853 0 0 3.58853 0 8C0 12.4115 3.58853 16 8 16C12.4115 16 16 12.4115 16 8C16 3.58853 12.4115 0 8 0ZM8 14.7607C4.27266 14.7607 1.23934 11.7273 1.23934 8C1.23934 4.27266 4.27266 1.23934 8 1.23934C11.728 1.23934 14.7607 4.27266 14.7607 8C14.7607 11.7273 11.7273 14.7607 8 14.7607Z"
                            fill="#8F8F8F"
                            />
                        </g>
                        <defs>
                            <clipPath id="clip0_101_270">
                            <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                        </svg>
                    </span>
                    <span><?php echo get_the_date('d/m/Y'); ?></span>
                    </div>
                </div>
                <article class='post-content'>
                    <?php the_content();?>
                </article>
                
                
            <?php endwhile; else : ?>
            <?php endif; ?>
            <!-- Get post mặt định -->


          
          <div class="list-bottom">
            <div class="head">
              <h1 class="title">đọc thêm</h1>
            </div>
            <div class="list">

                 <?php
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 3, // số lượng bài viết
                        'cat' => 79, // lấy bài viết trong chuyên mục có id là 1
                        // 'offset' =>1
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query;
                    $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?></a>
                            <p class="name">Sự kiện</p>
                            <h2 class="title">
                                <?php the_title(); ?>
                            </h2>
                            <p class="desc">
                                <?php the_excerpt(); ?>
                            </p>
                            <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                            <div class="line"></div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>

              
 
            </div>
          </div>
        </div>
        <?php get_template_part('contact'); ?>
      </div>
    </main>

<?php get_footer()?>