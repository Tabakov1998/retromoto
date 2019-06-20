<?php
remove_action('wp_head', 'rad_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);


add_theme_support ('post-thumbnails');


function language_selector_flags(){
 $languages = icl_get_languages('skip_missing=0&orderby=code');
 if(!empty($languages)){
 foreach($languages as $l){
 if(!$l['active']) echo '<a href="'.$l['url'].'">';
 echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
 if(!$l['active']) echo '</a>';
 }
 }
}
register_nav_menus( array(
    'header_menu' => '  ',
    'footer_menu' => '  '
) );