<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/akn3khf.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="chamber-header">
        <div class="chamber-header__container">
            <div class="chamber-header__logo">
                <?php if (get_theme_mod('chamber_logo_url')): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="chamber-header__logo-link">
                        <img src="<?php echo esc_url(get_theme_mod('chamber_logo_url')); ?>"
                            alt="<?php bloginfo('name'); ?>" class="chamber-header__logo-image">
                    </a>
                <?php endif; ?>
            </div>

            <button class="chamber-header__toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
            </button>

            <nav class="chamber-header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'chamber-header__menu'
                ));
                ?>
            </nav>

            <div class="chamber-header__social">
                <?php if (get_theme_mod('chamber_instagram')): ?>
                    <a href="<?php echo esc_url(get_theme_mod('chamber_instagram')); ?>" target="_blank"
                        rel="noopener noreferrer" class="chamber-header__instagram" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="chamber-header__instagram-icon">
                            <path
                                d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zm0 2h8.5A3.75 3.75 0 0120 7.75v8.5A3.75 3.75 0 0116.25 20h-8.5A3.75 3.75 0 014 16.25v-8.5A3.75 3.75 0 017.75 4zm4.25 3.5a4.75 4.75 0 100 9.5 4.75 4.75 0 000-9.5zm0 2a2.75 2.75 0 110 5.5 2.75 2.75 0 010-5.5zm4.88-2.38a1.13 1.13 0 100 2.26 1.13 1.13 0 000-2.26z" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>