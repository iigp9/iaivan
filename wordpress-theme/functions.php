<?php
/**
 * iaivan Theme Functions
 * Funciones personalizadas y configuración del tema
 */

// Configuración básica del tema
function iaivan_setup() {
    // Soporte para título del sitio
    add_theme_support('title-tag');
    
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    
    // Soporte para logo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 40,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Registrar menús
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'iaivan'),
        'footer' => __('Menú Footer', 'iaivan'),
    ));
}
add_action('after_setup_theme', 'iaivan_setup');

// Registrar áreas de widgets
function iaivan_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'iaivan'),
        'id'            => 'sidebar-1',
        'description'   => __('Añade widgets aquí.', 'iaivan'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'iaivan_widgets_init');

// Cargar estilos y scripts
function iaivan_scripts() {
    wp_enqueue_style('iaivan-style', get_stylesheet_uri(), array(), '1.2', 'all');
    
    // Lucide Icons CDN para iconos
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    
    // Script personalizado
    wp_enqueue_script('iaivan-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'iaivan_scripts');

function iaivan_critical_css() {
    ?>
    <style>
        body, html, #page, .site {
            background: linear-gradient(to bottom, #0a0e27, #060913) !important;
            color: white !important;
            margin: 0 !important;
            padding: 0 !important;
        }
        * {
            box-sizing: border-box;
        }
        svg {
            color: #06b6d4 !important;
            stroke: #06b6d4 !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'iaivan_critical_css', 1);

function iaivan_remove_wp_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'iaivan_remove_wp_styles', 100);

// Customizer - Opciones personalizables
function iaivan_customize_register($wp_customize) {
    
    // Sección Hero
    $wp_customize->add_section('iaivan_hero_section', array(
        'title'    => __('Sección Hero', 'iaivan'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Tu IA de Gestión Inteligente',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'    => __('Título Hero', 'iaivan'),
        'section'  => 'iaivan_hero_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Potencia tu negocio con inteligencia artificial en todos tus dispositivos',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'    => __('Subtítulo Hero', 'iaivan'),
        'section'  => 'iaivan_hero_section',
        'type'     => 'textarea',
    ));
    
    // Sección Solución Integral
    $wp_customize->add_section('iaivan_solution_section', array(
        'title'    => __('Solución Integral', 'iaivan'),
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('solution_title', array(
        'default'           => 'Solución integral para tu gestión con IA',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('solution_title', array(
        'label'    => __('Título Solución', 'iaivan'),
        'section'  => 'iaivan_solution_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('solution_description', array(
        'default'           => 'Automatiza procesos, optimizalos y toma decisiones inteligentes.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('solution_description', array(
        'label'    => __('Descripción Solución', 'iaivan'),
        'section'  => 'iaivan_solution_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('solution_button_text', array(
        'default'           => 'Comenta Gratis',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('solution_button_text', array(
        'label'    => __('Texto Botón', 'iaivan'),
        'section'  => 'iaivan_solution_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('solution_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('solution_button_url', array(
        'label'    => __('URL Botón', 'iaivan'),
        'section'  => 'iaivan_solution_section',
        'type'     => 'url',
    ));
    
    // Botón CTA Header
    $wp_customize->add_section('iaivan_header_section', array(
        'title'    => __('Header CTA', 'iaivan'),
        'priority' => 32,
    ));
    
    $wp_customize->add_setting('header_button_text', array(
        'default'           => 'INSTALAR APP',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('header_button_text', array(
        'label'    => __('Texto Botón Header', 'iaivan'),
        'section'  => 'iaivan_header_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('header_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('header_button_url', array(
        'label'    => __('URL Botón Header', 'iaivan'),
        'section'  => 'iaivan_header_section',
        'type'     => 'url',
    ));
    
    // Plan Gratis
    $wp_customize->add_section('iaivan_plan_gratis', array(
        'title'    => __('Plan Gratis', 'iaivan'),
        'priority' => 33,
    ));
    
    $wp_customize->add_setting('plan_gratis_title', array(
        'default'           => 'Plan Gratis',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_gratis_title', array(
        'label'    => __('Título Plan', 'iaivan'),
        'section'  => 'iaivan_plan_gratis',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_gratis_price', array(
        'default'           => '€0/mes',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_gratis_price', array(
        'label'    => __('Precio', 'iaivan'),
        'section'  => 'iaivan_plan_gratis',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_gratis_description', array(
        'default'           => 'Prueba nuestras funciones básicas sin compromiso',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('plan_gratis_description', array(
        'label'    => __('Descripción', 'iaivan'),
        'section'  => 'iaivan_plan_gratis',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('plan_gratis_button_text', array(
        'default'           => 'Empezar Gratis',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_gratis_button_text', array(
        'label'    => __('Texto Botón', 'iaivan'),
        'section'  => 'iaivan_plan_gratis',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_gratis_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('plan_gratis_button_url', array(
        'label'    => __('URL Botón', 'iaivan'),
        'section'  => 'iaivan_plan_gratis',
        'type'     => 'url',
    ));
    
    // Plan Profesional
    $wp_customize->add_section('iaivan_plan_profesional', array(
        'title'    => __('Plan Profesional', 'iaivan'),
        'priority' => 34,
    ));
    
    $wp_customize->add_setting('plan_profesional_title', array(
        'default'           => 'Plan Profesional',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_profesional_title', array(
        'label'    => __('Título Plan', 'iaivan'),
        'section'  => 'iaivan_plan_profesional',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_profesional_price', array(
        'default'           => '€29/mes',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_profesional_price', array(
        'label'    => __('Precio', 'iaivan'),
        'section'  => 'iaivan_plan_profesional',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_profesional_description', array(
        'default'           => 'Perfecto para pequeñas empresas y autónomos',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('plan_profesional_description', array(
        'label'    => __('Descripción', 'iaivan'),
        'section'  => 'iaivan_plan_profesional',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('plan_profesional_button_text', array(
        'default'           => 'Más información',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_profesional_button_text', array(
        'label'    => __('Texto Botón', 'iaivan'),
        'section'  => 'iaivan_plan_profesional',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_profesional_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('plan_profesional_button_url', array(
        'label'    => __('URL Botón', 'iaivan'),
        'section'  => 'iaivan_plan_profesional',
        'type'     => 'url',
    ));
    
    // Plan Enterprise
    $wp_customize->add_section('iaivan_plan_enterprise', array(
        'title'    => __('Plan Enterprise', 'iaivan'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('plan_enterprise_title', array(
        'default'           => 'Plan Enterprise',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_enterprise_title', array(
        'label'    => __('Título Plan', 'iaivan'),
        'section'  => 'iaivan_plan_enterprise',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_enterprise_price', array(
        'default'           => '€99/mes',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_enterprise_price', array(
        'label'    => __('Precio', 'iaivan'),
        'section'  => 'iaivan_plan_enterprise',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_enterprise_description', array(
        'default'           => 'Para empresas que necesitan máximo rendimiento',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('plan_enterprise_description', array(
        'label'    => __('Descripción', 'iaivan'),
        'section'  => 'iaivan_plan_enterprise',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('plan_enterprise_button_text', array(
        'default'           => 'Más información',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('plan_enterprise_button_text', array(
        'label'    => __('Texto Botón', 'iaivan'),
        'section'  => 'iaivan_plan_enterprise',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('plan_enterprise_button_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('plan_enterprise_button_url', array(
        'label'    => __('URL Botón', 'iaivan'),
        'section'  => 'iaivan_plan_enterprise',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'iaivan_customize_register');

// SVG Support
function iaivan_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'iaivan_mime_types');
?>
