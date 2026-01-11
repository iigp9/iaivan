<?php get_header(); ?>

<!-- Sección Solución Integral -->
<section class="ai-solution-section">
    <div class="ai-solution-grid">
        <div class="solution-content">
            <h2 style="color: white !important;"><?php echo esc_html(get_theme_mod('solution_title', 'Solución integral para tu gestión con IA')); ?></h2>
            <p style="color: #cbd5e0 !important;"><?php echo esc_html(get_theme_mod('solution_description', 'Automatiza procesos, optimizalos y toma decisiones inteligentes.')); ?></p>
            <a href="<?php echo esc_url(get_theme_mod('solution_button_url', '#')); ?>" class="cta-button">
                <?php echo esc_html(get_theme_mod('solution_button_text', 'Comenta Gratis')); ?>
            </a>
        </div>

        <div class="brain-visual">
            <!-- SVG con color cyan brillante forzado -->
            <svg class="brain-icon" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 300px; height: 300px; color: #06b6d4; filter: drop-shadow(0 0 60px rgba(6, 182, 212, 1));">
                <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/>
                <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/>
            </svg>
        </div>
    </div>
</section>

<!-- Hero Section con Dispositivos -->
<section class="hero-section">
    <h1 class="hero-title" style="color: white !important;"><?php echo esc_html(get_theme_mod('hero_title', 'Tu IA de Gestión Inteligente')); ?></h1>
    <p class="hero-subtitle" style="color: #06b6d4 !important;"><?php echo esc_html(get_theme_mod('hero_subtitle', 'Potencia tu negocio con inteligencia artificial en todos tus dispositivos')); ?></p>

    <div class="devices-showcase">
        <!-- Móvil Izquierdo -->
        <div class="device phone-device phone-left">
            <div class="device-screen">
                <svg class="device-brain" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 48px; height: 48px; color: #06b6d4;">
                    <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/>
                    <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/>
                </svg>
            </div>
        </div>

        <!-- Laptop Centro -->
        <div class="device laptop-device">
            <div class="device-screen">
                <svg class="device-brain" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 80px; height: 80px; color: #06b6d4;">
                    <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/>
                    <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/>
                </svg>
                <div class="device-text">
                    <h3 style="color: white !important;">iaivan</h3>
                    <p style="color: #06b6d4 !important;">Tu IA de Gestión</p>
                </div>
            </div>
        </div>

        <!-- Móvil Derecho -->
        <div class="device phone-device phone-right">
            <div class="device-screen">
                <svg class="device-brain" viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 48px; height: 48px; color: #06b6d4;">
                    <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/>
                    <path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/>
                </svg>
            </div>
        </div>
    </div>
</section>

<!-- Sección Servicios -->
<section class="services-section" id="servicios">
    <div class="services-header">
        <h2 style="color: white !important;">Nuestros Servicios</h2>
        <p style="color: #cbd5e0 !important;">Elige el plan perfecto para tu negocio</p>
    </div>

    <div class="services-grid">
        <!-- Plan Gratis -->
        <div class="service-card">
            <div class="service-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 32px; height: 32px; color: #06b6d4;">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                </svg>
            </div>
            <h3 style="color: white !important;"><?php echo esc_html(get_theme_mod('plan_gratis_title', 'Plan Gratis')); ?></h3>
            <p class="service-price"><?php echo esc_html(get_theme_mod('plan_gratis_price', '€0/mes')); ?></p>
            <p class="service-description"><?php echo esc_html(get_theme_mod('plan_gratis_description', 'Prueba nuestras funciones básicas sin compromiso')); ?></p>
            <ul class="service-features">
                <li>Acceso limitado a IA</li>
                <li>5 consultas al día</li>
                <li>Soporte por email</li>
                <li>Interfaz básica</li>
            </ul>
            <a href="<?php echo esc_url(get_theme_mod('plan_gratis_button_url', '#')); ?>" class="service-button">
                <?php echo esc_html(get_theme_mod('plan_gratis_button_text', 'Empezar Gratis')); ?>
            </a>
        </div>

        <!-- Plan Profesional -->
        <div class="service-card">
            <div class="service-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 32px; height: 32px; color: #06b6d4;">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                </svg>
            </div>
            <h3 style="color: white !important;"><?php echo esc_html(get_theme_mod('plan_profesional_title', 'Plan Profesional')); ?></h3>
            <p class="service-price"><?php echo esc_html(get_theme_mod('plan_profesional_price', '€29/mes')); ?></p>
            <p class="service-description"><?php echo esc_html(get_theme_mod('plan_profesional_description', 'Perfecto para pequeñas empresas y autónomos')); ?></p>
            <ul class="service-features">
                <li>Consultas ilimitadas</li>
                <li>Borrado de archivos originales</li>
                <li>Soporte prioritario</li>
                <li>Integraciones básicas</li>
            </ul>
            <a href="<?php echo esc_url(get_theme_mod('plan_profesional_button_url', '#')); ?>" class="service-button">
                <?php echo esc_html(get_theme_mod('plan_profesional_button_text', 'Más información')); ?>
            </a>
        </div>

        <!-- Plan Enterprise -->
        <div class="service-card featured">
            <span class="service-badge">MÁS POPULAR</span>
            <div class="service-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#06b6d4" stroke-width="2" style="width: 32px; height: 32px; color: #06b6d4;">
                    <rect width="20" height="8" x="2" y="2" rx="2" ry="2"/>
                    <rect width="20" height="8" x="2" y="14" rx="2" ry="2"/>
                    <line x1="6" x2="6.01" y1="6" y2="6"/>
                    <line x1="6" x2="6.01" y1="18" y2="18"/>
                </svg>
            </div>
            <h3 style="color: white !important;"><?php echo esc_html(get_theme_mod('plan_enterprise_title', 'Plan Enterprise')); ?></h3>
            <p class="service-price"><?php echo esc_html(get_theme_mod('plan_enterprise_price', '€99/mes')); ?></p>
            <p class="service-description"><?php echo esc_html(get_theme_mod('plan_enterprise_description', 'Para empresas que necesitan máximo rendimiento')); ?></p>
            <ul class="service-features">
                <li>Todo del Plan Profesional</li>
                <li>Borración permanente segura</li>
                <li>API completa</li>
                <li>Soporte 24/7</li>
                <li>Análisis avanzado</li>
            </ul>
            <a href="<?php echo esc_url(get_theme_mod('plan_enterprise_button_url', '#')); ?>" class="service-button">
                <?php echo esc_html(get_theme_mod('plan_enterprise_button_text', 'Más información')); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
