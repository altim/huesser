<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

remove_filter( 'the_content', 'wpautop' );

//setup language
function lang_setup(){
    load_theme_textdomain('husser', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'lang_setup');


//remove top admin bar
add_filter( 'show_admin_bar', '__return_false' );

//register menus
function register_husser_menus() {
    register_nav_menus(
        array('main_menu' => __( 'Main Menu', 'husser' ),'top_right_menu' => __( 'Top Right', 'husser' ))
    );
}
add_action( 'init', 'register_husser_menus' );



function addCustomJavascript() {
    if ( ! is_admin() ) {

//        wp_register_script('customjquery', get_template_directory_uri() . '/assets/js/jquery-1.11.2.min.js');
//        wp_enqueue_script('customjquery');
//
//        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js');
//        wp_enqueue_script('modernizr');
//
//        wp_register_script('dlmenu', get_template_directory_uri() . '/js/dlmenu.js', 'modernizr');
//        wp_enqueue_script('dlmenu');
//
//        wp_register_script('custom', get_template_directory_uri() . '/js/custom.js','dlmenu');
//        wp_enqueue_script('custom');

    }
}

add_action('init','addCustomJavascript');



function enqueue_styles() {

    wp_register_style('reset', get_template_directory_uri() . '/assets/css/component.css', array(), '1', 'all');
    wp_enqueue_style('reset');

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );




function localize(){
    if ( ! is_admin() ) {
        wp_localize_script( 'custom', 'my_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }

}

add_action('init','localize');


// Register sidebars

if(function_exists("register_sidebar")){

    register_sidebar(array("name"=>"Footer_1"));

}

if(function_exists("register_sidebar")){

    register_sidebar(array("name"=>"Footer_2"));

}

if(function_exists("register_sidebar")){

    register_sidebar(array("name"=>"Footer_3"));

}

if(function_exists("register_sidebar")){

    register_sidebar(array("name"=>"Footer_4"));

}


// =========== SHORTCODES ===========

// [rowstart]
function rowstart_func() {
    $html = "<div class='row'>";
    return $html;
}
add_shortcode( 'rowstart', 'rowstart_func' );

// [rowend]
function rowend_func() {
    $html = "</div>";
    return $html;
}
add_shortcode( 'rowend', 'rowend_func' );


// [col-sm-6]
function col_sm_3_func() {
    $html = "<div class='col-sm-3'>";
    return $html;
}
add_shortcode( 'col_sm_3', 'col_sm_3_func' );

// [colend]
function colend_func() {
    $html = "</div>";
    return $html;
}
add_shortcode( 'colend', 'colend_func' );




// [block3]
function block3_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
        'link' => 'link',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-3">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='<a href="'.$link.'">Erfahren Sie mehr</a>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block3', 'block3_func' );



// [block6 foo="foo-value"]
function block6_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
        'link' => 'link',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-6">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='<a href="'.$link.'">Erfahren Sie mehr</a>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block6', 'block6_func' );


// [block9]
function block9_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
        'link' => 'link',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-9">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='<a href="'.$link.'">Erfahren Sie mehr</a>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block9', 'block9_func' );



// [block12 foo="foo-value"]
function block12_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
        'link' => 'link',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-12">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='<a href="'.$link.'">Erfahren Sie mehr</a>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block12', 'block12_func' );


//Blocks without link
// [block3normal]
function block3normal_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-3">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block3normal', 'block3normal_func' );



// [block6normal]
function block6normal_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-6">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block6normal', 'block6normal_func' );


// [block9normal]
function block9normal_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-9">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block9normal', 'block9normal_func' );



// [block12normal]
function block12normal_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-12">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='<p>'.$description.'</p>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block12normal', 'block12normal_func' );






//Blocks without link and descrition

// [block3sm]
function block3sm_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-3">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block3sm', 'block3sm_func' );



// [block6sm]
function block6sm_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-6">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block6sm', 'block6sm_func' );


// [block9sm]
function block9sm_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-9">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block9sm', 'block9sm_func' );



// [block12sm]
function block12sm_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
    ), $atts));

    $html = "";

    $html.='<div class="col-md-12">';
    $html.='<div class="mod mod-tile">';
    $html.='<img src="'.$image.'" alt="">';
    $html.='<div class="wrapper">';
    $html.='<h3>'.$title.'</h3>';
    $html.='</div>';
    $html.='</div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'block12sm', 'block12sm_func' );





// Material
function material_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'title' => 'Title',
        'description' => 'Description',
        'accordion_items_field' => ''
    ), $atts));


    //separate accordion items and create a list from them
    $accordion_items = "<li>". implode("</li><li>",explode(",",$accordion_items_field))."</li>";

    $html = "";

    //$html .='<div class="col-md-3">';
    $html .='<div class="mod mod-accordion">';
    $html .='    <img src="'.$image.'" alt="">';
   
   
    $html .='    <div class="accordion-container">';
    $html .='        <h3 class="js-trigger">'.$title.'</h3>';
    $html .='        <div class="accordion-content">';
    $html .='           <div class="wrapper">';
    $html .='            <p>'.$description.'</p>';
    $html .='           </div>';
    $html .='        </div>';
    $html .='   </div>';
    $html .='</div>';
    //$html .='</div>';

    return $html;
}
add_shortcode( 'material', 'material_func' );




// Person
function person_func( $atts ) {
    extract(shortcode_atts(array(
        'image' => '',
        'name' => 'Name',
        'title' => 'Title',
        'phone' => 'Phone',
        'email' => ''
    ), $atts));


    //separate accordion items and create a list from them
    $accordion_items = "<li>". implode("</li><li>",explode(",",$accordion_items_field))."</li>";

    $html = "";


    $html.='<div class="col-sm-4">';
    $html.='    <div class="mod mod-contact-bubble">';
    $html.='        <img style="max-width:270px" src="'.$image.'" alt="">';
    $html.='        <h3>'.$name.'</h3>';
    $html.='        <h4>'.$title.'</h4>';
    $html.='        <p>';
    $html.='            Telefon: '.$phone.'<br>';
    $html.='            <a href="mailto:'.$email.'">'.$email.'</a>';
    $html.='        </p>';
    $html.='    </div>';
    $html.='</div>';

    return $html;
}
add_shortcode( 'person', 'person_func' );



//Accordion start
function accordionstart_func( $atts ) {
    extract(shortcode_atts(array(
        'title' => 'Title',
    ), $atts));

    $html = "";

    $html .='<div class="mod mod-accordion accordion-with-table">';
    $html .='    <div class="accordion-container">';
    $html .='        <h3 class="js-trigger">'.$title.'</h3>';
    $html .='        <div class="accordion-content">';
    $html .='           <div class="wrapper">';

    return $html;
}
add_shortcode( 'accordionstart', 'accordionstart_func' );


function tablestart_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='<table class="accordion_table">';

    return $html;
}
add_shortcode( 'tablestart', 'tablestart_func' );



function tableend_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='</table>';

    return $html;
}
add_shortcode( 'tableend', 'tableend_func' );

function trstart_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='<tr>';

    return $html;
}
add_shortcode( 'trstart', 'trstart_func' );


function trend_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='</tr>';

    return $html;
}
add_shortcode( 'trend', 'trend_func' );




function tdstart_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='<td>';

    return $html;
}
add_shortcode( 'tdstart', 'tdstart_func' );


function tdend_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));

    $html = "";

    $html .='</td>';

    return $html;
}
add_shortcode( 'tdend', 'tdend_func' );



//Accordion end
function accordionend_func( $atts ) {
    extract(shortcode_atts(array(
    ), $atts));


    $html = "";
    $html .='           </div>';
    $html .='        </div>';
    $html .='   </div>';
    $html .='</div>';

    return $html;
}
add_shortcode( 'accordionend', 'accordionend_func' );