<?php
/**
 * Template Name: Parade Page
 * Template for the 404 Day Parade page
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title"><?php esc_html_e('404 Day Parade', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle">
            <?php echo esc_html(get_theme_mod('parade_subtitle', 'Saturday, April 4, 2026 • Downtown Atlanta')); ?>
        </p>
    </div>
</div>

<!-- Parade Section -->
<?php get_template_part('template-parts/section', 'parade'); ?>

<!-- FAQ Section -->
<?php get_template_part('template-parts/section', 'faq'); ?>

<!-- Sponsor Logos Section -->
<?php get_template_part('template-parts/section', 'sponsors'); ?>

<?php
get_footer();
