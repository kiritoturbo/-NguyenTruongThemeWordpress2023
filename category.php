<?php get_header() ?>

<main class="main">
    <div class="wrapper details">
        <!-- <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                }
                ?> -->

        <div class="astra-nav">
            <!-- lấy tên danh mục  single_cat_title() -->
            <h1 style="text-transform: uppercase; margin-bottom:20px;"><?php single_cat_title(); ?></h1>

            <ul class="list">
                <!-- // Get term by id (''term_id'') in Categories taxonomy. -->
                <?php $test = get_term_by('id', 80, 'category'); ?>
                <!-- // echo '<pre>';
                    // print_r ($test);
                    // echo '</pre>'; -->

                <li class="item">
                    <a href="<?php echo get_term_link($test->slug, 'category'); ?>" class="item-link"><?php echo $test->name; ?></a>
                </li>
                <!-- lấy danh mục con  -->
                <?php
                $args = array(
                    'type'      => 'post',
                    'child_of'  => 0,
                    'parent'    => $test->term_id,
                    'hide_empty' => 0,
                    'taxonomy' => 'category',
                    'number' => 3
                );
                $categories = get_categories($args);
                foreach ($categories as $category) { ?>
                    <li class="item">
                        <a href="<?php echo get_term_link($category->slug, 'category'); ?>" class="item-link"><?php echo $category->name; ?></a>
                    </li>
                <?php } ?>
                <!--                 
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
                </li> -->
            </ul>

            <!-- form search  -->
            <div class="widget">
                <!-- <h3>Tìm kiếm </h3> -->
                <div class="form-wrapper">
                    <form action="<?php get_permalink() ?> " method="GET" role="form">
                        <input type="text" name='s' class="form-control" id="search" placeholder="Nhập từ khóa ">
                        <!-- bắt buộc name phải là chữ s vì wordpress tìm theo chữ này ,ko được dùng bất kì chữ khác  -->
                        <button class="btn" id="submit" type="submit" style="border:1px solid #ccc">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="astra">

            <section class="list-top">

                <div class="left">
                    <?php
                    $args = array(
                        'post_status' => 'publish',
                        'showposts' => 1,
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
                            <?php the_excerpt();
                            ?>
                        </p>
                        <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                    <?php endwhile;
                    wp_reset_postdata(); ?>






                    <!-- <?php
                            global $post;

                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'showposts' => 1,
                                'cat' => $post->ID,

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
                            <?php the_excerpt();
                            ?>
                        </p>
                        <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                    <?php endwhile;
                    wp_reset_postdata(); ?> -->

                </div>

                <div class="right">
                    <?php
                    $args = array(
                        'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                        'showposts' => 2, // số lượng bài viết
                        'offset' =>1
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





                    <!-- <?php
                            global $post;
                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'showposts' => 2,
                                'cat' => $post->ID,
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
                    wp_reset_postdata(); ?> -->


                </div>

            </section>

            <section class="list-bottom">
                <!-- <div class="list">
                    <?php
                    global $post;
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'showposts' => 3,
                        'cat' => $post->ID,
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



    
                </div> -->
                <!-- <div class="list">
                
                    <?php
                    $args = array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'showposts' => 3,
                        'cat' => 81,
                        'offset' => 3
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
                </div> -->


                <!-- lấy sản phẩm theo tên  -->
                <!-- <div class="list">
                    <?php $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'ignore_sticky_posts' => 1,
                        'category' => $test->slug
                    );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query;
                    $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php global $product; ?>
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
                </div> -->
                <div class="list">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="item">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_id(), 'full', array('class' => 'thumnail')); ?></a>
                                <p class="name"><?php single_cat_title() ?></p>
                                <h2 class="title">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="desc">
                                    <?php the_excerpt(); ?>
                                </p>
                                <p class="time"><?php echo get_the_date('d - m - Y'); ?></p>
                                <div class="line"></div>
                            </div>


                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (paginate_links() != '') { ?>
                        <div class="quatrang">
                            <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'prev_text'    => __('« Mới hơn'),
                                'next_text'    => __('Tiếp theo »'),
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            ));
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </section>

        </div>


        <?php get_template_part('contact'); ?>
    </div>
</main>

<?php get_footer() ?>