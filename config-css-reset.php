<?php

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style(
    'css-reset',
    MODULES_PATH . '/config-css-reset/config-css-reset.css',
    array(), '1.0.4', 'all'
  );
}, 1);

add_action('enqueue_block_editor_assets', function(){
  wp_enqueue_style(
    'css-reset-editor',
    MODULES_PATH . '/config-css-reset/config-css-reset.editor.css',
    array(), '1.0.4', 'all'
  );
}, 1);
