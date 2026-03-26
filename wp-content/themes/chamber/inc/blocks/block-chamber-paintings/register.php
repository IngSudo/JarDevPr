<?php

function register_block_chamber_paintings()
{
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name' => 'block-paintings',
            'title' => __('Chamber - Paintings'),
            'description' => __('Gallery grid with filter'),
            'category' => 'chamber',
            'icon' => 'grid-view',
            'keywords' => array('gallery', 'paintings', 'filter'),
            'render_template' => get_template_directory() . '/inc/blocks/block-chamber-paintings/template.php',
            'supports' => array(
                'align' => true,
                'customClassName' => true,
            ),
            'enqueue_assets' => function () {
                wp_enqueue_style(
                    'block-chamber-paintings',
                    get_template_directory_uri() . '/inc/blocks/block-chamber-paintings/block-chamber-paintings.css',
                    array(),
                    _S_VERSION
                );

                wp_enqueue_script(
                    'block-chamber-paintings',
                    get_template_directory_uri() . '/inc/blocks/block-chamber-paintings/block-chamber-paintings.js',
                    array(),
                    _S_VERSION,
                    true
                );
            },
        ));
    }
}
add_action('acf/init', 'register_block_chamber_paintings');