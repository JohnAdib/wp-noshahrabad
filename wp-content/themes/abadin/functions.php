<?php

    
/*********************************************************************************************

Initalize Framework Settings

*********************************************************************************************/	
require ('theme-options.php');

/*********************************************************************************************

Content Navigation

*********************************************************************************************/
function site5framework_content_nav() {
	global $wp_query;
	if (  $wp_query->max_num_pages > 1 ) :
		if (function_exists('wp_pagenavi') ) {
			wp_pagenavi();
		} else { ?>
        	<nav id="nav-below">
			<h1 class="screen-reader-text">ناوبری مطالب</h1>
			<div class="nav-previous"><?php next_posts_link('<span class="meta-nav">&larr;</span> مطالب قدیمی تر'); ?></div>
			<div class="nav-next"><?php previous_posts_link('مطالب جدیدتر <span class="meta-nav">&rarr;</span>'); ?></div>
			</nav><!-- #nav-below -->
    	<?php }
	endif;
}

function get_image_url($img_src="") {
    if($img_src!="") $theImageSrc = $img_src;
    else $theImageSrc = wp_get_attachment_url(get_post_thumbnail_id($post_id));
    global $blog_id;
    if (isset($blog_id) && $blog_id > 0) {
        $imageParts = explode('/files/', $theImageSrc);
        if (isset($imageParts[1])) {
            $theImageSrc = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
        }
    }
    echo $theImageSrc;
}


/*-----------------------------------------------------------------------------Dashboard Settings------------------------- */
// show theme information on dashboard
function wpc_dashboard_widget_function() {
	echo "<ul>
	<li>زمان انتشار: اردیبهشت ماه 1392</li>
	<li>نام طرح: <a href='http://www.Mixa.ir/abadin' title='Abadin'>آبادین</a></li>
	<li>طراح پوسته: <a href='http://www.Mixa.ir' title='Mixa Group'>تیم میکسا</a></li>
	<li>پشتیبان هاست: <a href='http://www.Mixa.ir' title='گروه هاستینگ میکسا'>Mixa Server</a></li>
	</ul>";
}
function wpc_add_dashboard_widgets() {
	wp_add_dashboard_widget('wp_dashboard_widget', 'اطلاعات فنی پوسته', 'wpc_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );

// hide unused metabox from wordpress dashboard
function wpc_dashboard_widgets() {
	global $wp_meta_boxes;

// Remove the quickpress widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
// Incoming links
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
// Plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
// Right Now
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
// recent drafts
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
// recent comments
	//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
// Wordpress News	
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
// Wordpress weblog
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	
}
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');


function my_user_contactmethods($user_contactmethods){
 
  unset($user_contactmethods['yim']);
  unset($user_contactmethods['aim']);
  unset($user_contactmethods['jabber']);
 
  $user_contactmethods['birthdate'] = 'تاریخ تولد';
  $user_contactmethods['tel'] = 'تلفن تماس';
  $user_contactmethods['degree'] = 'مدرک تحصیلی';
  $user_contactmethods['studyfield'] = 'رشته تحصیلی';
  $user_contactmethods['facebook'] = 'اکانت فیسبوک';
  $user_contactmethods['twitter'] = 'اکانت توییتر';
 
  return $user_contactmethods;
}



 
?>
<?php    // Personal Options
     
add_action( 'personal_options_update', 'save_custom_profile_fields' );
add_action( 'edit_user_profile_update', 'save_custom_profile_fields' );
function save_custom_profile_fields( $user_id ) {
    update_user_meta( $user_id, 'teampage', $_POST['teampage'], get_user_meta( $user_id, 'teampage', true ) );
}
  
add_action( 'personal_options', 'add_profile_options');
function add_profile_options( $profileuser ) {
    $greeting = get_user_meta($profileuser->ID, 'teampage', true);
    ?><tr>
    <th scope="row">Include On Meet The Team Page?</th>
    <td>
    <select name="teampage" id="teampage" >
        <option id="Yes"<?php selected( $profileuser->teampage, 'Yes' ); ?>>Yes</option>
        <option id="No"<?php selected( $profileuser->teampage, 'No' ); ?>>No</option>
    </select>
    </td>
    </tr><?php
}
