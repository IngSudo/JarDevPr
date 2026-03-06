<footer class="chamber-footer">
    <div class="chamber-footer__container">
        <div class="chamber-footer__left">
            <?php if (get_theme_mod('chamber_logo_url')): ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_theme_mod('chamber_logo_url')); ?>" alt="<?php bloginfo('name'); ?>"
                        class="chamber-footer__logo">
                </a>
            <?php endif; ?>
        </div>

        <div class="chamber-footer__right">
            <div class="chamber-footer__nav-wrapper">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'chamber-footer__menu',
                ));
                ?>
            </div>

            <div class="chamber-footer__copyright">
                <p><?php echo wp_kses_post(get_theme_mod('chamber_copyright')); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>