<?php
$id = $args['id'] ?? '';
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$button = $args['button'] ?? '';
?>

<div id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">

    <div class="block-title-button__tl-wrap">
        <?php if ($title): ?>
            <h2 class="block-title-button__title">
                <?= esc_html($title); ?>
            </h2>
        <?php endif; ?>
    </div>

    <div class="block-title-button__btn-wrap">
        <?php if (!empty($button['url'])): ?>
            <a href="<?= esc_url($button['url']); ?>" target="<?= esc_attr($button['target'] ?: '_self'); ?>"
                class="block-title-button__button">
                <?= esc_html($button['title']); ?>
            </a>
        <?php endif; ?>
    </div>

</div>