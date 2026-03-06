<?php

$title = get_field('chamber_tb_title');
$button = get_field('chamber_tb_button');

$id = 'block-title-button-' . $block['id'];
$className = 'block-title-button';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

if ($title || $button) {

    get_template_part(
        'template-parts/blocks/title-button',
        null,
        array(
            'id' => $id,
            'className' => $className,
            'title' => $title,
            'button' => $button,
        )
    );

}