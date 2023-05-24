<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
    <?php wp_head(); ?>
</head>

<body>

    <header class="header">
        <div class="wrapper">
            <label for="menu-input" class="menu-icon">
                <img src="<?php bloginfo('template_directory') ?>/images/menu-icon.png" alt="" />
            </label>
            <input type="checkbox" hidden class="menu-input" id="menu-input" />
            <div class="nav-mobile">
                <div class="wrap">
                    <div class="logo">
                        <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="" /></a>
                    </div>
                    <label for="menu-input">
                        <img src="<?php bloginfo('template_directory') ?>/images/close-icon.png" alt="" />
                    </label>
                </div>
                <!-- <ul class="nav-mobile-list"> -->
                    <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'topmenu', 
                        'container' => 'false', 
                        'menu_id' => 'nav-list', 
                        'menu_class' => 'nav-list'
                    ) 
                    ); ?>
                    <!-- <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link active">Trang chủ</a>
                    </li>
                    <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link">Về chúng tôi</a>
                    </li>
                    <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link">Đội ngũ sáng lập</a>
                    </li>
                    <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link">Liên hệ</a>
                    </li>
                    <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link">Dịch vụ</a>
                    </li>
                    <li class="nav-mobile-item">
                        <a href="" class="nav-mobile-link">Akadon News</a>
                    </li> -->
                <!-- </ul> -->
            </div>
            <div class="logo">
                <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="" /></a>
            </div>
            <div class="nav">
                <!-- <ul class="nav-list"> -->
                    <?php wp_nav_menu( 
                        array( 
                                'theme_location' => 'topmenu', 
                                'container' => 'false', 
                                'menu_id' => 'nav-list', 
                                'menu_class' => 'nav-list'
                            ) 
                    ); ?>
                    <!-- <li class="nav-item">
                        <a href="" class="nav-item-link active">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item-link">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item-link">Đội ngũ sáng lập</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item-link">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item-link">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item-link">Akadon News</a>
                    </li> -->
                <!-- </ul> -->
            </div>
            <div class="language">
                <img class="language-flag" src="<?php bloginfo('template_directory') ?>/images/vietnam-flag.png" alt="" />
                <span class="language-name">Vietnamese</span>
                <span><svg width="7" height="5" viewBox="0 0 7 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.31472L3.68528 4L6.37056 1.31472" stroke="black" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </header>