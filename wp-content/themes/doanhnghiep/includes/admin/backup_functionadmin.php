<?php
/* 
@package zangTheme
	=================
		ADMIN PAGE
	=================
*/
function zang_add_admin_page(){
	// Generate zang admin page
	add_menu_page('zang Theme Option','Tenten Framework' , 'manage_options' , 'template_admin_zang', 'zang_theme_create_page', 	get_template_directory_uri() . '/images/tenten.png', 110);
	// Generate Sunset Admin Sub pages
	add_submenu_page('template_admin_zang', 'Custom Text Header','Custom Text Header', 'manage_options' , 'template_admin_zang', 'zang_theme_create_page');
	// Activate custom setttings
	add_action('admin_init', 'zang_custom_settings');
}
add_action('admin_menu', 'zang_add_admin_page');
function zang_custom_settings(){
	// Sidebar Options
	register_setting('zang-settings-groups', 'phone');
	register_setting('zang-settings-groups', 'address_header');
	register_setting('zang-settings-groups', 'footer_fb');
	register_setting('zang-settings-groups', 'footer_twitter');
	register_setting('zang-settings-groups', 'footer_ggplus');
	register_setting('zang-settings-groups', 'footer_insta');
	

	add_settings_section('zang-header-options','Chỉnh sửa Header','zang_header_options','template_admin_zang');
	add_settings_field('address-hd','Số điện thoại', 'zang_phone_header','template_admin_zang', 'zang-header-options');
	add_settings_field('phone-hd','Địa chỉ', 'zang_address_header','template_admin_zang', 'zang-header-options');

	add_settings_section('zang-footer-options','Chỉnh sửa Footer','zang_footer_options','template_admin_zang');
	add_settings_field('facebook','Facebook Link', 'zang_footer_fb','template_admin_zang', 'zang-footer-options');
	add_settings_field('twitter','Twitter Link', 'zang_footer_twitter','template_admin_zang', 'zang-footer-options');
	add_settings_field('ggplus','Google Plus Link', 'zang_footer_ggplus','template_admin_zang', 'zang-footer-options');
	add_settings_field('insta','Instagram Link', 'zang_footer_insta','template_admin_zang', 'zang-footer-options');
}
	
function zang_header_options(){
	echo '';
}
function zang_footer_options(){
	echo '';
}

function zang_phone_header(){
	$phone = esc_attr(get_option('phone'));
	echo '<input type="text" class="iptext_adm" name="phone" value="'.$phone.'" >';
}
function zang_address_header(){
	$address_header = esc_attr(get_option('address_header'));
	echo '<input type="text" class="iptext_adm" name="address_header" value="'.$address_header.'" placeholder="" ';
}
function zang_footer_fb(){
	$footer_fb = esc_attr(get_option('footer_fb'));
	echo '<input type="text" class="iptext_adm" name="footer_fb" value="'.$footer_fb.'" placeholder="" ';
}
function zang_footer_twitter(){
	$footer_twitter = esc_attr(get_option('footer_twitter'));
	echo '<input type="text" class="iptext_adm" name="footer_twitter" value="'.$footer_twitter.'" placeholder="" ';
}
function zang_footer_ggplus(){
	$footer_ggplus = esc_attr(get_option('footer_ggplus'));
	echo '<input type="text" class="iptext_adm" name="footer_ggplus" value="'.$footer_ggplus.'" placeholder="" ';
}
function zang_footer_insta(){
	$footer_insta = esc_attr(get_option('footer_insta'));
	echo '<input type="text" class="iptext_adm" name="footer_insta" value="'.$footer_insta.'" placeholder="" ';
}

function myshortcode(){
	ob_start();
	if(get_option('footer_fb') || get_option('footer_twitter') || get_option('footer_ggplus') || get_option('footer_insta') ){
		?>
	<ul class="social_ft">
		<?php if(get_option('footer_fb')){ ?>
		<li class="fb_ft"><a href="<?php echo get_option('footer_fb'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<?php }?>
		<?php if(get_option('footer_twitter')){ ?>
		<li class="twitter"><a href="<?php echo get_option('footer_twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
		<?php }?>
		<?php if(get_option('footer_ggplus')){ ?>
		<li class="ggplus"><a href="<?php echo get_option('footer_ggplus'); ?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
		<?php }?>
		<?php if(get_option('footer_insta')){ ?>
		<li class="instagram"><a href="<?php echo get_option('footer_insta'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<?php }?>
	</ul>	
		<?php
	}
	return ob_get_clean();
}
add_shortcode('social_ft','myshortcode');

function zang_theme_create_page(){
	require_once(get_template_directory().'/includes/admin/zang-admin.php');
}

