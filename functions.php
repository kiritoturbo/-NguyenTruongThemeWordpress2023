<?php 
define('wp2023_path',plugin_dir_path(__FILE__));



function theme_settup(){
    register_nav_menu('topmenu',__( 'Menu chính' ));
    add_theme_support('post-thumbnails');//chọn ảnh đại diện
    add_theme_support('title-tag');
    // add_theme_support('excerpt');
    //add_theme_support( 'custom-background' );//custom background

    //custom background
    $args = array(
        'default-color' => 'fff',
        // 'default-image' => get_template_directory_uri() . '/images/hero-bg.png',
    );
    add_theme_support( 'custom-background', $args );



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

//tạo breadcrumb
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





//yêu cầu plugin cần thiết 
function showAdminMessages()
{
    $plugins_requires = array(
        
        'Advanced Custom Field' => 'advanced-custom-fields/advanced-custom-fields.php'
    );

    $plugin_messages = array();

    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    foreach ($plugins_requires as $name => $active_file) {
        $result = validate_plugin( $active_file );

        if(is_wp_error( $result )){
            $plugin_messages[] = 'This theme requires you to <strong>install</strong> the <strong>'.$name.'</strong> plugin';
        }else{
            if(!is_plugin_active( $active_file ))
            {
                $plugin_messages[] = 'This theme requires you to <strong>active</strong> the <strong>'.$name.'</strong> plugin';
            }
        }
    }

    if(count($plugin_messages) > 0)
    {
        echo '<div id="message" class="error">';

            foreach($plugin_messages as $message)
            {
                echo '<p>'.$message.'</p>';
            }

            echo '<p><strong><a href="' . admin_url( 'plugins.php' ) .'" class="button">Check Now</a></strong></p>';
            // echo '<button type="button" class="notice-dismiss"><span class="screen-reader-text">Bỏ qua thông báo này </span></button>';

        echo '</div>';
    }
}
add_action('admin_notices', 'showAdminMessages');




//hàm tạo metabox để custom thông tin ngoài trang chủ
function truongnguyen_meta_box(){
    add_meta_box('thong_tin','Thông tin ứng dụng','truongnguyen_thongtin_output','page');
}
add_action('add_meta_boxes', 'truongnguyen_meta_box');


//hàm giao diện 
function truongnguyen_thongtin_output($post){
    $value = get_post_meta( $post->ID, 'companyName', true );
    $descriptCompany = get_post_meta( $post->ID, 'descriptCompany', true );
    // print_r ($post);
    // die();
    
    ?>
        <?php include_once wp2023_path."/template-parts/templateThongTin.php"; ?>
    <?php
}

//hàm lấy thông tin 
function truongnguyen_thongtin_save($post_id){
    if($_REQUEST['post_type']=='page'){
        $companyName =sanitize_text_field($_POST['companyName']);
        $descriptCompany =sanitize_text_field($_POST['descriptCompany']);

    }
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pre>';
    // echo $companyName;
    // die();
    // echo $companyName;
    // die();
    update_post_meta($post_id,'companyName',$companyName);
    update_post_meta($post_id,'descriptCompany',$descriptCompany);
}
add_action('save_post','truongnguyen_thongtin_save');




//Custom Headers
function themename_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri().'/images/hero-bg.png',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
add_theme_support( 'custom-header' );




//hàm tạo metabox để custom thông tin liên hệ
function truongnguyen_footer_meta_box(){
    add_meta_box('footer','Thông tin liên hệ','truongnguyen_footer_thongtin_output','page');
}
add_action('add_meta_boxes', 'truongnguyen_footer_meta_box');
//hàm giao diện 
function truongnguyen_footer_thongtin_output($post){
    $phoneNumber = get_post_meta( $post->ID, 'phoneNumber', true );
    $emailCompany = get_post_meta( $post->ID, 'emailCompany', true );
    $addressCompany = get_post_meta( $post->ID, 'addressCompany', true );
    $imageCompany = get_post_meta( $post->ID, 'imageCompany', true );
    
    ?>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><label for="phoneNumber">Số điện thoại liên hệ</label></th>
                    <td><input name="phoneNumber" type="text" id="phoneNumber" value="<?php echo $phoneNumber ?>" class="regular-text"></td>
                    <!-- chú ý khi đưa giá chỉ phải echo  -->
                </tr>
                <tr>
                    <th scope="row"><label for="email-Company">Email</label></th>
                    <td><input name="emailCompany" type="text" id="email-Company" value="<?php echo $emailCompany ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="address-Company">Địa chỉ</label></th>
                    <td><input name="addressCompany" type="text" id="address-Company" value="<?php echo $addressCompany ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="image-Company">chọn ảnh</label></th>
                    <td><input name="imageCompany" type="file" id="image-Company" value="<?php echo $imageCompany ?>" ></td>
                </tr>
               
            </tbody>
        </table>
    <?php
}
//hàm lấy thông tin 
function truongnguyen_footer_thongtin_save($post_id){
    if($_REQUEST['post_type']=='page'){
        $phoneNumber =sanitize_text_field($_POST['phoneNumber']);
        $emailCompany =sanitize_text_field($_POST['emailCompany']);
        $addressCompany =sanitize_text_field($_POST['addressCompany']);
        $imageCompany =($_POST['imageCompany']);

    }
    update_post_meta($post_id,'phoneNumber',$phoneNumber);
    update_post_meta($post_id,'emailCompany',$emailCompany);
    update_post_meta($post_id,'addressCompany',$addressCompany);
    // update_post_meta($post_id,'imageCompany',$imageCompany);
}
add_action('save_post','truongnguyen_footer_thongtin_save');







// function mytheme_setup_theme_supported_features() {
  
//     add_theme_support( 'editor-color-palette',
//       '#556270',
//       '#4ECDC4',				
//       '#C7F464',
//       '#FF6B6B',
//       '#C44D58',
//     );
    
//   }
// //   add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );




// function html5wp_pagination()
// {
// global $wp_query;
// $big = 999999999;
// $pages = paginate_links(array(
// 'base' => str_replace($big, '%#%', get_pagenum_link($big)),
// 'format' => '?paged=%#%',
// 'current' => max(1, get_query_var('paged')),
// 'total' => $wp_query->max_num_pages,
// 'type'  => 'array',
// ));
// if( is_array( $pages ) ) {
// $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
// echo '<div class="text-center"><ul class="pagination bounceInUp animated wow" data-wow-delay=".8s">';
// foreach ( $pages as $page ) {
// echo "<li>$page</li>";
// }
// echo '</ul></div>';
// }
// }



//theme options 
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options', // Title hiển thị khi truy cập vào Options page
		'menu_title'	=> 'Theme options', // Tên menu hiển thị ở khu vực admin
		'menu_slug' 	=> 'theme-settings', // Url hiển thị trên đường dẫn của options page
		'capability'	=> 'edit_posts',
		'redirect'	=> false
	));
}