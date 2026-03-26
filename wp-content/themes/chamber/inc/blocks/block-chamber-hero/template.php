<?php

$hero_image = get_field('chamber_hero_image');
$hero_title = get_field('chamber_hero_title');

$id = 'block-chamber-hero-' . $block['id'];
$className = 'block-chamber-hero';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

if ($hero_image || $hero_title) {

    get_template_part(
        'template-parts/blocks/chamber-hero',
        null,
        array(
            'id' => $id,
            'className' => $className,
            'hero_image' => $hero_image,
            'hero_title' => $hero_title,
        )
    );

}