<?php

/* =========================
   REGISTER BLOCK CSS
========================= */
function chamber_register_block_assets() {
    foreach (glob(get_template_directory() . '/inc/blocks/*/block-*.css') as $css) {
        $handle = basename($css, '.css');

        wp_register_style(
            $handle,
            get_template_directory_uri() . '/inc/blocks/' . basename(dirname($css)) . '/' . basename($css),
            array(),
            _S_VERSION
        );
    }
}
add_action('init', 'chamber_register_block_assets');

/* =========================
   REGISTER ACF BLOCKS 
========================= */
foreach (glob(get_template_directory() . '/inc/blocks/*/register.php') as $file) {
    require $file;
}

/* =========================
   REGISTER BLOCK.JSON 
========================= */
add_action('init', function() {
    foreach (glob(get_template_directory() . '/inc/blocks/*/block.json') as $block_json) {
        register_block_type(dirname($block_json));
    }
});