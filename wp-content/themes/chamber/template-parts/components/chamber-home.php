<section class="chamber-home">
    <div class="chamber-home__image">
        <?php
        $image_id = get_theme_mod('chamber_home_image');

        if ($image_id) {
            echo wp_get_attachment_image(
                $image_id,
                'full',
                false,
                array(
                    'class' => 'chamber-home__img',
                )
            );
        }
        ?>
    </div>
</section>