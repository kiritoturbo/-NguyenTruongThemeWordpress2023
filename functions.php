<?php 
function theme_settup(){
    register_nav_menu('topmenu',__( 'Menu chính' ));
    add_theme_support('post-thumbnails');//chọn ảnh đại diện


    ///đăng ký sidebar cho website 
    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name' => 'cột bên sidebar',
            'id' => 'sidebar'
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