<?php
$id = $args['id'] ?? '';
$className = $args['className'] ?? '';
$paintings = $args['paintings'] ?? [];
?>

<div id="<?= esc_attr($id); ?>" class="<?= esc_attr($className); ?>">

    <div class="block-chamber-paintings__filters">
        <?php
        $used_types = [];

        foreach ($paintings as $painting) {
            $raw_type = $painting['type'];
            $slug = sanitize_title($raw_type);
            $used_types[$slug] = $raw_type;
        }

        $desired_order = ['circle', 'flow', 'fluid', 'landscape', 'orb', 'stratum', 'surge'];

        foreach ($desired_order as $slug) {
            if (isset($used_types[$slug])): ?>
                <button data-filter="<?= esc_attr($slug); ?>">
                    <?= esc_html($used_types[$slug]); ?>
                </button>
            <?php endif;
        }
        ?>
    </div>

    <div class="block-chamber-paintings__grid">

        <?php foreach ($paintings as $painting):

            $image = $painting['image'];
            $description = $painting['description'];
            $type = sanitize_title($painting['type']);
            ?>

            <figure class="gallery-grid-item category-<?= esc_attr($type); ?>">

                <div class="gallery-grid-item-wrapper">
                    <?php if (!empty($image['url'])): ?>
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?? ''); ?>">
                    <?php endif; ?>
                </div>

                <figcaption class="gallery-caption">
                    <div class="gallery-caption-wrapper">
                        <p class="gallery-caption-content">
                            <?= esc_html($description); ?>
                        </p>
                    </div>
                </figcaption>

            </figure>

        <?php endforeach; ?>

    </div>

</div>