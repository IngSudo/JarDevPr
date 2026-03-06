<?php

function chamber_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    if (!defined('_S_VERSION')) {
        define('_S_VERSION', '1.0.0');
    }

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'chamber'),
        'footer' => __('Footer Menu', 'chamber'),
    ));
}
add_action('after_setup_theme', 'chamber_setup');

/* =========================
   ASSETS
========================= */
require_once get_template_directory() . '/inc/functions/enqueue.php';

/* =========================
   CUSTOMIZER
========================= */
require_once get_template_directory() . '/inc/functions/customize.php';

/* =========================
   ACF BLOCKS
========================= */
require_once get_template_directory() . '/inc/functions/acf-blocks.php';

/* =========================
   BLOCK CATEGORY
========================= */
require_once get_template_directory() . '/inc/functions/block-category.php';
