<?php

add_action('wp_enqueue_scripts', 'config_css_reset_enqueue', 1);
add_action('enqueue_block_editor_assets', 'config_css_reset_enqueue', 1);

function config_css_reset_enqueue(){
  $module_basename = 'config-css-reset';
  $module_filename = (current_action() == 'enqueue_block_editor_assets') ? $module_basename.'.editor.css' : $module_basename.'.css';
  $module_directory_path = dirname( __FILE__ );
  $module_directory_uri = strpos($module_directory_path,'/themes/') ? get_stylesheet_directory_uri().'/'.$module_basename : WP_CONTENT_URL.'/modules/'.$module_basename;

  wp_enqueue_style(
    $module_basename,
    $module_directory_uri.'/'.$module_filename,
    array(),
    filemtime($module_directory_path.'/'.$module_filename),
    'all'
  );
}
