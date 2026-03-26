<?php

function register_block_hero()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'block-hero',
            'title' => __('Hero'),
            'description' => __('Main hero'),
            'category' => 'chamber',
            'icon' => 'cover-image',
            'keywords' => array('hero', 'image', 'title'),
            'render_template' => get_template_directory() . '/inc/blocks/block-chamber-hero/template.php',
            'supports' => array(
                'align' => true,
                'customClassName' => true,
            ),
            'enqueue_assets' => function () {
                wp_enqueue_style(
                    'block-hero',
                    get_template_directory_uri() . '/inc/blocks/block-chamber-hero/block-chamber-hero.css',
                    array(),
                    _S_VERSION
                );
            },
        ));
    }
}
add_action('acf/init', 'register_block_hero');