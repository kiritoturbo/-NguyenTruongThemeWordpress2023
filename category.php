<?php get_header() ?>

<main class="main">
    <div class="wrapper details">
        <!-- <?php
            if ( function_exists( 'yoast_breadcrumb' ) ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?> -->

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
                        'post_status' => 'publish', 
                        'post_type' => 'post',  
                        'showposts' => 1, 
                        'cat' => 80,
                        
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

                </div>

                <div class="right">
                    <?php
                    $args = array(
                        'post_status' => 'publish', 
                        'post_type' => 'post', 
                        'showposts' => 2,
                        'cat' => 80, 
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
                        'post_status' => 'publish',
                        'post_type' => 'post', 
                        'showposts' => 3, 
                        'cat' => 81, 
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
                <div class="list">
                    <?php
                    $args = array(
                        'post_status' => 'publish', 
                        'post_type' => 'post',  
                        'showposts' => 3,
                        'cat' => 81, 
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