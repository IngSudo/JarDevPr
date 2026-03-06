<?php

$paintings = get_field('chamber_paintings');
$id = 'block-chamber-paintings-' . $block['id'];
$className = 'block-chamber-paintings';

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

if ($paintings) {

    get_template_part(
        'template-parts/blocks/chamber-paintings',
        null,
        array(
            'id' => $id,
            'className' => $className,
            'paintings' => $paintings,
        )
    );

}