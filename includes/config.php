<?php
defined('ABSPATH') or die();

/* ADD SETTINGS PAGE
------------------------------------------------------*/
if( !function_exists('photo_box_add_options_page') ){
	function photo_box_add_options_page() {
		add_options_page(
			'Photo Box Settings',
			'Photo Box',
			'manage_options',
			'photo-box-setting',
			'photo_box_setting_display'
		);
	}
}
add_action('admin_menu','photo_box_add_options_page');

if( !function_exists('photo_box_testing') ){
	function photo_box_testing(){
		// use for test
		echo '<ul class="estimate clearfix">';
		
		for( $i =0; $i<10; $i++ ){
			echo '<li class="item-'.$i.'">'.$i.'</li>';
		}
		
		echo '</ul>';
		
		return;
	}
}