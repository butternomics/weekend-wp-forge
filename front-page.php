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

<!-- Sponsor Roll for 404 Day Section -->
<section class="section section-muted">
    <div class="container" style="max-width: 64rem; text-align: center;">
        <h2 style="font-size: clamp(2.25rem, 5vw, 3rem); margin-bottom: 1.5rem; color: var(--color-primary);">
            <?php esc_html_e('Sponsor 404 Day Weekend', '404-day-weekend'); ?>
        </h2>
        <p style="font-size: 1.25rem; line-height: 1.8; color: var(--color-muted-foreground); margin-bottom: 2rem; max-width: 48rem; margin-left: auto; margin-right: auto;">
            <?php esc_html_e('Join us in celebrating Atlanta\'s vibrant culture and community! Partner with 404 Day Weekend to showcase your brand to thousands of engaged attendees and support this iconic Atlanta celebration.', '404-day-weekend'); ?>
        </p>
        <a href="https://docs.google.com/presentation/d/1Fkjc6nhXeej4xH8DeOf4cYKSeUp-VnKYsKCnzz-ByPk/edit"
           target="_blank"
           rel="noopener noreferrer"
           style="display: inline-block; background-color: var(--color-secondary); color: var(--color-primary); padding: 1rem 2.5rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; font-size: 1.125rem; transition: all 0.3s; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); text-decoration: none;">
            <?php esc_html_e('Request Sponsorship Info', '404-day-weekend'); ?>
        </a>
    </div>
</section>

<!-- Sponsor Logos Section -->
<?php get_template_part('template-parts/section', 'sponsors'); ?>

<?php
get_footer();
