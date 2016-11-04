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
//-----------------------------------------------
// Including scripts
//-----------------------------------------------
function add_citytrack_scripts(){
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('design', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'));
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array('bootstrap'));
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array('bootstrap'));
	wp_enqueue_style('timeline', get_template_directory_uri() . '/assets/css/timeline.css', array('bootstrap'));

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery.ui.datepicker-hu'));
    wp_enqueue_script('jquery-matchHeight', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array('jquery'));
    wp_enqueue_script('jquery-truncate', get_template_directory_uri() . '/assets/js/jquery.truncate.js', array('jquery'));
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'));
    wp_enqueue_script('timeline', get_template_directory_uri() . '/assets/js/timeline.js', array('jquery'));
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'));
    wp_localize_script('main', "hatvani_ajax", array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'add_citytrack_scripts');

//-----------------------------------------------
// Remove admin bar
//-----------------------------------------------
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Footer extra',
        'menu_title'    => 'Footer extra',
        'menu_slug'     => 'footer_extra',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Slider',
        'menu_title'    => 'Slider',
        'menu_slug'     => 'slider',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Kapcsolat',
        'menu_title'    => 'Kapcsolat',
        'menu_slug'     => 'kapcsolat',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Prémium partnerek',
        'menu_title'    => 'Prémium partnerek',
        'menu_slug'     => 'premium-partners',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Logók',
        'menu_title'    => 'Logók',
        'menu_slug'     => 'logo-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Konfigurátor',
        'menu_title'    => 'Konfigurátor',
        'menu_slug'     => 'konfigurator',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Idopontfoglalás',
        'menu_title'    => 'Idopontfoglalás',
        'menu_slug'     => 'idopont-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
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
add_filter('acf/settings/show_admin', '__return_false');


//-----------------------------------------------
// Change the footer text
//-----------------------------------------------
function change_admin_footer() {
    echo "HATVANI WORDPRESS ADMIN THEME by DONE.";
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

function hatvani_checkidopont_handle() {

    $sql = "SELECT id FROM foglalasok WHERE munka_datum = '" . $_POST['datum'] . "' AND munka_ido = '". $_POST['idopont']  . "'";

    global $wpdb;    
    $results = $wpdb->get_results($sql, OBJECT );

    $eloreora = get_field('idopontfoglalas_korlatozasa','option');

    $date1 = new DateTime($_POST['datum'].'T'.$_POST['idopont'].":00+01:00");
    $date2 = new DateTime();

    $diff = $date2->diff($date1);
    //die();
    $hours = $diff->h;
    $hours = $hours + ($diff->days*24);

    //in the past
    if ($date1<$date2){
        echo('1');
        wp_die();

    }

    //check the future
    if ($hours<(int)$eloreora){
        echo('1');
        wp_die();
    }

    //mar foglalt
    if (count($results) > 0){
        echo('1');
        wp_die();
        return;
    }

    wp_die();
}

add_action('wp_ajax_hatvani_checkidopont', 'hatvani_checkidopont_handle');
add_action('wp_ajax_nopriv_hatvani_checkidopont', 'hatvani_checkidopont_handle');

function hatvani_konfigurator_handle() {
    global $wpdb;

    $data = array();
    foreach (@$_POST['konfigurator'] as $i) {
        $data[$i['name']] = $i['value'];
    }

    //echo( __(var_dump($data), "hatvani"));
    //wp_die();

    $content = "";
    $content.="Név: " . $data['konf_vnev'] . "<br/>";
    $content.="E-mail: " . $data['konf_mail'] . "<br/>";
    $content.="Telefon: " . $data['konf_tel'] . "<br/>";
    $content.="Szolgáltatás: " . $data['konf_szolg_tipus'] . "<br/>";
    $content.="Autó típusa: " . $data['konf_marka'] . ", " . $data['konf_auto'] . ", " . $data['konf_modell'] . "<br/>";
    $content.="Megjegyzés: " . $data['konf_megj'];

    
    //mail
    wp_mail(get_option('admin_email'), "Új ajánlatkérés érkezett", $content, array('Content-Type: text/html; charset=UTF-8'));

    wp_die();
}

add_action('wp_ajax_hatvani_konfigurator', 'hatvani_konfigurator_handle');
add_action('wp_ajax_nopriv_hatvani_konfigurator', 'hatvani_konfigurator_handle');


function hatvani_foglalas_handle() {
    global $wpdb;

    $data = array();
    foreach (@$_POST['foglalas'] as $i) {
        $data[$i['name']] = $i['value'];
    }


    $sql = "SELECT id FROM foglalasok WHERE munka_datum = '" . $data[ido_datum] . "' AND munka_ido = '". $data[ido_idopont] . "'";


    global $wpdb;    
    $results = $wpdb->get_results($sql, OBJECT );

    if (count($results) > 0){
        echo('1');
        wp_die();
        return;
    }


    $content = "";
    $content.="Tisztelt " . $data['ido_nev'] . "<br/><br/>";
    $content = "Köszönjük regisztrációját!<br/>" ;
    $content = "Az Ön idopontja:" . $data['ido_datum'] . " " . $data['ido_idopont'] . ".<br/><br/>";
    $content.= "Kérjük, 10 perccel a foglalása elotte jelenjen meg, és jelentkezzen a munkafelvételen, különben a foglalása nem garantálható. <br/><br/>";
    $content.= "Üdvözlettel, <br/>";
    $content.= "A Hatvani Gumiszerviz csapata";

    $content2 = "";
    $content2.="Új foglalás:" . $data['konf_vnev'] . "<br/><br/>";
    $content2.="Idopont: " . $data['ido_datum'] . " " . $data['ido_idopont'] . "<br/>";
    $content2.="Jármu: " . $data['ido_marka'] . " " . $data['ido_auto_tipus'] . "<br/>";
    $content2.="Jármu kategória: " . $data['ido_kat'] . "<br/>";
    $content2.="Rendszám: " . $data['ido_auto_rsz'] . "<br/>";
    $content2.="Muszaki érvényesség: " . $data['ido_muszaki'] . "<br/>";
    $content2.="Ügyfél: " . $data['ido_nev'] . ", " . $data['ido_email'] . ", " . $data['ido_telefon']."<br/>";
    $content2.="Igényelt szolgáltatás: "  .$data['ido_szolg_tipus'];
    
    //save to file
    if (isset($data['newsletter'])) {
        $file = get_home_path() . "mailchimp/list-" . date('Y-m') . ".csv";
        $fp = fopen($file, 'a');
        if ($fp) {
            fputcsv($fp, array(date("Y-m-d H:i:s"), $data['email'], $data['name']));
            fclose($fp);
        } else {
            $content.="<br/>There is problem with mailchimp export.";
        }
    }

    $sql = "INSERT INTO foglalasok (auto_rsz, user_mail, user_nev, user_tel, auto_marka, auto_tipus, auto_muszaki,munka_nev, munka_datum, munka_ido, munka_tipus)
    VALUES ('$data[ido_auto_rsz]', '$data[ido_email]', '$data[ido_nev]', '$data[ido_telefon]', '$data[ido_marka]','$data[ido_auto_tipus]', '$data[ido_muszaki]', '$data[ido_szolg_tipus]','$data[ido_datum]', '$data[ido_idopont]','$data[ido_szolg_num]' )";

    global $wpdb;
    $results = $wpdb->get_results($sql, OBJECT );

    //mail
    wp_mail($data['ido_email'], "Hatvani visszaigazolás", $content, array('Content-Type: text/html; charset=UTF-8'));
    wp_mail(get_option('admin_email'), "[" .$data['ido_szolg_tipus']. "] Új foglalás", $content2, array('Content-Type: text/html; charset=UTF-8'));
    
    wp_die();
}

add_action('wp_ajax_hatvani_foglalas', 'hatvani_foglalas_handle');
add_action('wp_ajax_nopriv_hatvani_foglalas', 'hatvani_foglalas_handle');