<?php 
function theme_settup(){
    register_nav_menu('topmenu',__( 'Menu chính' ));
    add_theme_support('post-thumbnails');//chọn ảnh đại diện
    add_theme_support('title-tag');



    ///đăng ký sidebar cho website 
    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name' => 'cột bên sidebar',
            'id' => 'sidebar'
        ));
    }

    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name' => 'Tìm kiếm',
            'id' => 'customsidebar'
        ));
    }
}
add_action('init', 'theme_settup');


function the_breadcrumb() {
    echo '<ul id="crumbs">';
if (!is_home()) {
    echo '<a href="';
    echo get_option('home');
    echo '">';
    echo '<img src=""/>Home';
    echo "</a> >> ";
    if (is_category() || is_single()) {
            the_category(' >> ');
            if (is_single()) {
                   '<strong style="color:red;">'.the_title(' >> ').'</strong>' ;
            }
    } elseif (is_page()) {
            echo the_title(' >> ');
    }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

//custom logo 
// add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );






