<?php get_header() ?>

<main class="main">
    <div class="wrapper details">
        <div class="astra-nav">
            <ul class="list">
                
                <li class="item ">
                    <a href="" class="item-link active">Tất cả</a>
                </li>
                <li class="item">
                    <a href="" class="item-link">Tin tức</a>
                </li>
                <li class="item">
                    <a href="" class="item-link">Sự kiện</a>
                </li>
                <li class="item">
                    <a href="" class="item-link">Blog</a>
                </li>
            </ul>
        </div>
        <div class="astra">

            <section class="list-top">

                <div class="left">
                    <?php
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 1, // số lượng bài viết
                        'cat' => 80, // lấy bài viết trong chuyên mục có id là 1
                        // 'offset' =>1
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query;
                    $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?></a>
                        <p class="name">Tin tức</p>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="desc">
                            <?php the_excerpt(); // Lấy mô tả ngắn của bài post 
                            ?>
                        </p>
                        <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                    <?php endwhile;
                    wp_reset_postdata(); ?>

                </div>

                <div class="right">
                    <?php
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 2, // số lượng bài viết
                        'cat' => 80, // lấy bài viết trong chuyên mục có id là 1
                        'offset' => 1
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
                            <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                            <div class="line"></div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>


                </div>

            </section>

            <section class="list-bottom">
                <div class="list">
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



                    <!-- <div class="item">
                        <img class="img" src="./images/astra-normal-2.png" alt="" />
                        <p class="name green">tin tức</p>
                        <h2 class="title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h2>
                        <p class="desc">
                            Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn
                            toàn.
                        </p>
                        <p class="time">05/02/2021</p>
                        <div class="line"></div>
                    </div>
                    <div class="item">
                        <img class="img" src="./images/astra-normal-3.png" alt="" />
                        <p class="name orange">Blog</p>
                        <h2 class="title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h2>
                        <p class="desc">
                            Kết nối học viên với gia sư nhanh chóng, tiện lợi và hoàn
                            toàn.
                        </p>
                        <p class="time">05/02/2021</p>
                        <div class="line"></div>
                    </div> -->
                </div>
                <div class="list">
                    <?php
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                        'showposts' => 3, // số lượng bài viết
                        'cat' => 81, // lấy bài viết trong chuyên mục có id là 1
                        'offset' =>3
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query;
                    $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="item">
                            <?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?>
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
            </section>
        </div>


        <?php get_template_part('contact'); ?>
    </div>
</main>

<?php get_footer() ?>