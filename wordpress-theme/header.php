<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS crítico inline para garantizar estilos oscuros desde el inicio */
        body, html { background: #060913 !important; margin: 0; padding: 0; }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background: linear-gradient(to bottom, #0a0e27, #060913) !important; color: white !important;">
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <!-- SVG con color cyan forzado -->
                <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 40px; height: 40px; color: #06b6d4;">
                    <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/>
                    <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/>
                </svg>
            <?php endif; ?>
            <div class="logo-text">
                <h1 style="color: white !important; margin: 0;"><?php bloginfo('name'); ?></h1>
                <p style="color: #06b6d4 !important; margin: 0;"><?php bloginfo('description'); ?></p>
            </div>
        </a>

        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <a href="<?php echo esc_url(get_theme_mod('header_button_url', '#')); ?>" class="cta-button">
            <?php echo esc_html(get_theme_mod('header_button_text', 'INSTALAR APP')); ?>
        </a>
    </div>
</header>
