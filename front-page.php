<?php
/**
 * Template Name: Homepage
 * The template for displaying the homepage
 *
 * @package 404DayWeekend
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-background" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-bg.jpg'); ?>');"></div>
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-logo">
            <?php if (file_exists(get_template_directory() . '/assets/images/logo-main.png')) : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                     alt="404 Day Weekend 2026" />
            <?php endif; ?>
        </div>

        <h1 class="hero-title">
            <?php echo esc_html(get_theme_mod('hero_title', '404 Day Weekend 2026')); ?>
        </h1>

        <p class="hero-subtitle">
            <?php echo esc_html(get_theme_mod('hero_subtitle', 'Celebrating Atlanta\'s Culture, Creativity, and Community')); ?>
        </p>

        <p class="hero-date">
            <?php echo esc_html(get_theme_mod('hero_date', 'April 1–5, 2026')); ?>
        </p>

        <!-- Hero Action Buttons -->
        <div class="hero-actions">
            <a href="<?php echo esc_url(home_url('/events')); ?>" class="hero-button">
                <?php esc_html_e('Event Schedule', '404-day-weekend'); ?>
            </a>
            <a href="#contact" class="hero-button">
                <?php esc_html_e('Partner With Us', '404-day-weekend'); ?>
            </a>
            <a href="https://www.eventeny.com/events/2nd-404-day-parade-27361/"
               target="_blank" rel="noopener noreferrer" class="hero-button">
                <?php esc_html_e('Parade Info & FAQ', '404-day-weekend'); ?>
            </a>
        </div>

        <div class="hero-actions-secondary">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdNfOTJ-LjDyE1GaD1GIdhS3tPRhF11ieaKoExBF6TnDogRcA/viewform"
               target="_blank" rel="noopener noreferrer" class="hero-button">
                <?php esc_html_e('Vendor Applications', '404-day-weekend'); ?>
            </a>
            <a href="https://www.eventeny.com/events/vendor/?id=43249"
               target="_blank" rel="noopener noreferrer" class="hero-button">
                <?php esc_html_e('Be a Volunteer', '404-day-weekend'); ?>
            </a>
        </div>
    </div>
</section>

<!-- Event Schedule Section -->
<?php get_template_part('template-parts/section', 'events'); ?>

<!-- Parade Section -->
<?php get_template_part('template-parts/section', 'parade'); ?>

<!-- FAQ Section -->
<?php get_template_part('template-parts/section', 'faq'); ?>

<!-- Sponsor Logos Section -->
<?php get_template_part('template-parts/section', 'sponsors'); ?>

<?php
get_footer();
