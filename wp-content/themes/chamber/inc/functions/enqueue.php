<?php
function chamber_assets()
{
    wp_enqueue_style(
        'chamber-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        _S_VERSION
    );

    wp_enqueue_script(
        'chamber-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        _S_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'chamber_assets');