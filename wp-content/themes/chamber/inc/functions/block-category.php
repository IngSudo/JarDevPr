<?php

add_filter('block_categories_all', function ($categories) {

    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'chamber',
                'title' => __('Chamber Blocks', 'chamber'),
            ),
        )
    );

});