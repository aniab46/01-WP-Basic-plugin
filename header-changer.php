<?php
/*
 * Plugin Name:       Header Changer
 * Plugin URI:        http://muhammadaniab.com/
 * Description:       Handle the basics with this plugins.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Muhammad Aniab
 * Author URI:        http://muhammadaniab.com/
 * License:           GPL v2 or later
 * License URI:       http://muhammadaniab.com/
 * Update URI:        http://muhammadaniab.com/
 * Text Domain:       Aniab plugin
 * Domain Path:       /languages
 */


 // into the class
 class 	Header_changer_plugin{
	public function __construct(){

		add_filter( 'the_content', array($this,'change_content'));
		add_filter( "the_title",array($this,"title_change"));
	}


	// change content
	public function change_content( $content ) {
	$content = $content. "This is added";
	return $content;
	}

	function title_change( $title) {
	if ( is_page() ) {

	$id=get_the_ID();
	$title = $title."New Title". $id;
	return $title;
	}
	else {
	return $title;
	}
	}
 }

new Header_changer_plugin();



//new class try with perfect way
class MSC_my_second_class{
	public function __construct(){
		add_action("init", array($this,"init"));

	}
	public function init() {
		add_filter( 'the_title',array($this,'HD_title_colour_change'));
	}
		function HD_title_colour_change($title){
			$stl = '<h2 style="color:red;">';
			$stl2 = '</h2>';
			$title = $stl. $title.$stl2;
			return $title;

		}


	
}

new MSC_my_second_class();


	

	
	



?>