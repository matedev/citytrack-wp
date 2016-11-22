<?php
//-----------------------------------------------
// Thumbnail sizes
//-----------------------------------------------
add_theme_support('post-thumbnails');
set_post_thumbnail_size(294, 196, true);

//-----------------------------------------------
// Menu registration
//-----------------------------------------------
register_nav_menus(array('primary' => 'Header Menu'));

load_theme_textdomain( 'citytrack', get_template_directory() . '/languages' );

//-----------------------------------------------
// Including scripts
//-----------------------------------------------
function add_citytrack_scripts(){
    /*wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array('bootstrap'));
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array('bootstrap'));
	wp_enqueue_style('timeline', get_template_directory_uri() . '/assets/css/timeline.css', array('bootstrap'));*/
    wp_enqueue_style('design', get_template_directory_uri() . '/assets/css/style.min.css', array());

    wp_enqueue_script('jquery');
    /*wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/0_bootstrap.min.js', array('jquery'));
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/1_jquery-ui.min.js', array('jquery'));
    wp_enqueue_script('jquery-matchHeight', get_template_directory_uri() . '/assets/js/3_jquery.matchHeight.js', array('jquery'));
    wp_enqueue_script('jquery-truncate', get_template_directory_uri() . '/assets/js/2_jquery.truncate.js', array('jquery'));
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/4_modernizr.js', array('jquery'));
    wp_enqueue_script('timeline', get_template_directory_uri() . '/assets/js/5_timeline.js', array('jquery'));
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/6_main.js', array('jquery'));*/
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'));
    wp_localize_script('main', "ct_ajax", array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'add_citytrack_scripts');

//-----------------------------------------------
// Remove admin bar
//-----------------------------------------------
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

//-----------------------------------------------
// Registering option menus
//-----------------------------------------------
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'CityTrack partners',
        'menu_title'    => 'CityTrack partners',
        'menu_slug'     => 'partner_logos',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));


    acf_add_options_page(array(
        'page_title'    => 'CityTrack footer',
        'menu_title'    => 'CityTrack footer',
        'menu_slug'     => 'footer',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'CityTrack events',
        'menu_title'    => 'CityTrack events',
        'menu_slug'     => 'events',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

//-----------------------------------------------
// Custom pagination
//-----------------------------------------------
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 1;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('<i class="fa fa-play fa-rotate-180" aria-hidden="true"></i>'),
    'next_text'       => __('<i class="fa fa-play" aria-hidden="true"></i>'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination text-center'>";
      //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}


//-----------------------------------------------
// Admin menu chrome fix
//-----------------------------------------------
function chrome_fix(){
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        wp_add_inline_style('wp-admin', '#adminmenu { transform: translateZ(0); }');
}

add_action('admin_enqueue_scripts', 'chrome_fix');

//-----------------------------------------------
// Hide ACF
//-----------------------------------------------
//add_filter('acf/settings/show_admin', '__return_false');


//-----------------------------------------------
// Change the footer text
//-----------------------------------------------
function change_admin_footer() {
    echo "CityTrack WordPress Admin Theme by UTA.";
}

add_filter( 'admin_footer_text', 'change_admin_footer' );

//-----------------------------------------------
// Change the login form logo
//-----------------------------------------------
function change_login_logo() { ?>
    <style>
        .login h1 a {
            background-image: url( <?= get_stylesheet_directory_uri(); ?>/assets/images/wp_logo.png );
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'change_login_logo' );

//-----------------------------------------------
// Change the login logo URL and title
//-----------------------------------------------
function change_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'change_login_logo_url' );

function change_login_logo_url_title() {
    return "Foxpost Login Theme";
}

add_filter( 'login_headertitle', 'change_login_logo_url_title' );

//-----------------------------------------------
// Style the login page
//-----------------------------------------------
function change_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/custom-login/custom-login.css' );
}

add_action( 'login_enqueue_scripts', 'change_login_stylesheet' );

//-----------------------------------------------
// Change default WP e-mail and name
//-----------------------------------------------
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');
 
function new_mail_from($old) {
 return 'citytrack@citytrack.fi';
}
function new_mail_from_name($old) {
 return 'CityTrack team';
}

//-----------------------------------------------
// Disable the password reset feature
//-----------------------------------------------
function disable_reset_pwd() {
    return false;
}

add_filter( 'allow_password_reset', 'disable_reset_pwd' );

//-----------------------------------------------
// Remove error shake
//-----------------------------------------------
function remove_shake() {
    remove_action( 'login_head', 'wp_shake_js', 12 );
}

add_action( 'login_head', 'remove_shake' );

//-----------------------------------------------
// Handle contact us from
//-----------------------------------------------
function ct_email_handle() {

    $data = array();
    foreach (@$_POST['contact_data'] as $i) {
        $data[$i['name']] = $i['value'];
    }

    if($data['locale'] = "fi_FI"){

    }else{

    }
    echo 1;

    $content_to_user = "";
    $content_to_user.= __("Dear", "citytrack") . " " . $data['user-name'] . ",<br/><br/>";
    $content_to_user.= __("Thank you for your interest! We received your message and will contact you soon.", "citytrack") . "<br/><br/>" ;
    $content_to_user.= __("Your message", "citytrack") . ": " . $data['message'] . ".<br/><br/>";
    $content_to_user.= __("Best regards", "citytrack") .", <br/>";
    $content_to_user.= __("CityTrack team", "citytrack");

    $subject_to_user = "[" . __("CityTrack automatic reply", "citytrack") . "] " . $data['subject'];

    $content_to_admin = "";
    $content_to_admin.= "New message from " . $data['user-name'] . "<br/><br/>";
    $content_to_admin.= "Name: " . $data['user-name'] . "<br/>";
    $content_to_admin.= "E-mail: " . $data['user-email'] . "<br/>";
    $content_to_admin.= "Subject: " . $data['subject'] . "<br/>";
    $content_to_admin.= "Message: " . $data['message'];

    $subject_to_admin = "New message from " . $data['user-name'] . " on CityTrack";

    
    //mail
    wp_mail(get_option('admin_email'), $subject_to_admin, $content_to_admin, array('Content-Type: text/html; charset=UTF-8'));
    wp_mail($data['user-email'], $subject_to_user, $content_to_user, array('Content-Type: text/html; charset=UTF-8'));

    wp_die();
}

add_action('wp_ajax_ct_email', 'ct_email_handle');
add_action('wp_ajax_nopriv_ct_email', 'ct_email_handle');

//-----------------------------------------------
// Handle event registration
//-----------------------------------------------
function ct_attend_handle() {

    $data = array();
    foreach (@$_POST['attend_data'] as $i) {
        $data[$i['name']] = $i['value'];
    }

    echo 1;
    $content_to_user = "";
    $content_to_user.= __("Dear", "citytrack") . " " . $data['user-name'] . ",<br/><br/>";
    $content_to_user.= __("Thank you for registering for the CityTrack", "citytrack") . " " . $data['event-name'] . " " . __("at the University of Tampere, on", "citytrack") . " " . $data['event-date'] . " " . __("at", "citytrack") . " " . $data['event-time'] .".<br/><br/>" ;
    $content_to_user.= __("See you soon", "citytrack") . ", <br/>";
    $content_to_user.= __("CityTrack team", "citytrack");

    $subject_to_user = "[" . __("CityTrack automatic reply", "citytrack") . "] " . __("Successfull registration", "citytrack");

    $content_to_admin = "";
    $content_to_admin.= "New registration from " . $data['user-name'] . "<br/><br/>";
    $content_to_admin.= "Event: " . $data['event-name'] . " on " . $data['event-date'] . "<br/>";
    $content_to_admin.= "Name: " . $data['user-name'] . "<br/>";
    $content_to_admin.= "E-mail: " . $data['user-email'] . "<br/>";
/*
    $content_to_admin.= "Subject: " . $data['subject'] . "<br/>";
    $content_to_admin.= "Message: " . $data['message'];
*/
    $subject_to_admin = "New registration from " . $data['user-name'] . " on CityTrack";

    
    //mail
    wp_mail(get_option('admin_email'), $subject_to_admin, $content_to_admin, array('Content-Type: text/html; charset=UTF-8'));
    wp_mail($data['user-email'], $subject_to_user, $content_to_user, array('Content-Type: text/html; charset=UTF-8'));

    wp_die();
}

add_action('wp_ajax_ct_attend', 'ct_attend_handle');
add_action('wp_ajax_nopriv_ct_attend', 'ct_attend_handle');

// Defer Javascripts
// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}