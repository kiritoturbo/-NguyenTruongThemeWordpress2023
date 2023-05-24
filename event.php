<section class="news">
    <h2 class="title">tin tức và sự kiện</h2>
    <h1 class="heading">các tin tức và sự kiện mới của akadon</h1>
    <div class="news-list">
    <?php 
        $args = array(
            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
            'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
            'showposts' => 3, // số lượng bài viết
            'cat' => 81, // lấy bài viết trong chuyên mục có id là 1
            // 'offset' =>1
        );
         ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="news-item">
                <?php echo get_the_post_thumbnail(get_the_id(),'full',array('class'=>'thumnail')); ?>
                <div class="news-item-title">
                    <?php the_title(); ?>
                </div>
                <p class="desc">
                    Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn toàn.
                </p>
                <p class="time"><?php echo get_the_date('d - m -Y');?></p>
                <div class="line"></div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>

        
        <!-- <div class="news-item">
            <img class="img" src="<?php bloginfo('template_directory') ?>/images/news-two.png" alt="" />
            <div class="news-item-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
            <p class="desc">
                Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn toàn.
            </p>
            <p class="time">05/02/2021</p>
            <div class="line"></div>
        </div>
        <div class="news-item">
            <img class="img" src="<?php bloginfo('template_directory') ?>/images/news-three.png" alt="" />
            <div class="news-item-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>
            <p class="desc">
                Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn toàn.
            </p>
            <p class="time">05/02/2021</p>
            <div class="line"></div>
        </div> -->
    </div>

    <div class="see-more">
        <a href="" class="link">Xem thêm</a>
    </div>
</section>