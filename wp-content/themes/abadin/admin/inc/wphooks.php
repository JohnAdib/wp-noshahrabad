<?php
/*********************************************************************************************

WP_Hooks - Enqueue Javascripts

*********************************************************************************************/
function site5framework_header_init() {
if (!is_admin()) {
	wp_enqueue_script( 'jquery' );

	wp_deregister_script( 'prettyphoto' );
	wp_register_script( 'prettyphoto', get_template_directory_uri().'/js/prettyphoto/jquery.prettyPhoto.js');
	wp_enqueue_script( 'prettyphoto' );
	wp_register_style( 'prettyphoto-style', get_template_directory_uri().'/js/prettyphoto/css/prettyPhoto.css');
	wp_enqueue_style( 'prettyphoto-style' );

	wp_enqueue_style('customstyle', get_template_directory_uri().'/lib/shortcodes/css/custom.css');
	wp_enqueue_script('customforbutton', get_template_directory_uri().'/lib/shortcodes/js/custom.js');

}
}
add_action('init', 'site5framework_header_init');

/*********************************************************************************************

Admin Hooks / Portfolio and Slider Media Uploader

*********************************************************************************************/
function site5framework_mediauploader_init() {
    if (is_admin()) {
    wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	wp_enqueue_script('mediauploader', get_template_directory_uri().'/admin/js/mediauploader.js', array('jquery','media-upload','thickbox'));
}
}
add_action('init', 'site5framework_mediauploader_init');



/*********************************************************************************************

Contact Form JS

*********************************************************************************************/
function site5framework_contactform_init() {
	if (is_page_template('contact.php') && !is_admin()) {
    wp_enqueue_script('contactform', get_template_directory_uri().'/js/contactform/contactform.js', array('jquery'), '1.0');
    }
}
add_action('template_redirect', 'site5framework_contactform_init');



/*********************************************************************************************

Stats

*********************************************************************************************/
function site5framework_analytics(){
	$output = of_get_option('journal_stats');
	if ( $output <> "" )
	echo stripslashes($output) . "\n";
}
add_action('wp_footer','site5framework_analytics');


/*********************************************************************************************

Nivo Slider

*********************************************************************************************/
function nivo_home_js() {
    if (is_home() && of_get_option('journal_slidertype') == 'nivo' && !is_admin()) {
        wp_enqueue_script('nivoslider', get_template_directory_uri().'/js/jquery.nivo.slider.pack.js');

        ?>
    <?php
    }
}
add_action('wp_footer', 'nivo_home_js');

/*********************************************************************************************

Nivo Slider

*********************************************************************************************/
function custom_js() {
    if (!is_admin()) {
        wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js');
        ?>
    <?php
    }
}
add_action('wp_footer', 'custom_js');
?>