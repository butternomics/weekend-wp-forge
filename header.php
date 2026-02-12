<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-container">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', '404-day-weekend'); ?></a>

    <header id="masthead" class="site-header">
        <div class="header-inner">
            <!-- Logo -->
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php if (file_exists(get_template_directory() . '/assets/images/logo-main.png')) : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                             alt="<?php bloginfo('name'); ?>" />
                    <?php else : ?>
                        <span style="color: var(--color-secondary); font-weight: 700; font-size: 1.5rem;">
                            <?php bloginfo('name'); ?>
                        </span>
                    <?php endif; ?>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Primary Menu', '404-day-weekend'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'four04_day_fallback_menu',
                ));
                ?>
                <a href="https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="cta-button">
                    <?php esc_html_e('Get Tickets', '404-day-weekend'); ?>
                </a>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle"
                    aria-controls="mobile-navigation"
                    aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle mobile menu', '404-day-weekend'); ?>">
                <span id="menu-icon">☰</span>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-navigation" class="mobile-navigation hidden" aria-label="<?php esc_attr_e('Mobile Menu', '404-day-weekend'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'mobile-menu',
                'container'      => false,
                'fallback_cb'    => 'four04_day_fallback_menu',
            ));
            ?>
            <a href="https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala"
               target="_blank"
               rel="noopener noreferrer"
               class="cta-button">
                <?php esc_html_e('Get Tickets', '404-day-weekend'); ?>
            </a>
        </nav>
    </header><!-- #masthead -->

    <div id="content" class="site-main">
<?php

/**
 * Fallback menu if no menu is assigned
 */
function four04_day_fallback_menu() {
    ?>
    <ul id="primary-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/events')); ?>"><?php esc_html_e('Events', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/parade')); ?>"><?php esc_html_e('Parade', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/404-fund')); ?>"><?php esc_html_e('404 Fund', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>"><?php esc_html_e('Blog', '404-day-weekend'); ?></a></li>
    </ul>
    <?php
}
