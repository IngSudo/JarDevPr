<?php
$id = $args['id'] ?? '';
$className = $args['className'] ?? '';
$hero_image = $args['hero_image'] ?? '';
$hero_title = $args['hero_title'] ?? '';
?>

<section id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">

    <div class="block-chamber-hero__img-wrap">
        <?php if ($hero_image): ?>
            <img src="<?= esc_url($hero_image); ?>" alt="Hero Image" />
        <?php endif; ?>
    </div>

    <div class="block-chamber-hero__title-wrap">
        <?php if ($hero_title): ?>
            <h1 class="block-chamber-hero__title">
                <?= esc_html($hero_title); ?>
            </h1>
        <?php endif; ?>
    </div>

</section>