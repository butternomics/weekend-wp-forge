<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container container-narrow" style="text-align: center;">
        <h1 class="page-header-title" style="font-size: clamp(3rem, 8vw, 6rem); margin-bottom: 0;">404</h1>
        <p class="page-header-subtitle"><?php esc_html_e('Page Not Found', '404-day-weekend'); ?></p>
    </div>
</div>

<main class="section">
    <div class="container container-narrow" style="text-align: center;">
        <p style="font-size: 1.25rem; color: var(--color-muted-foreground); margin-bottom: 2rem;">
            <?php esc_html_e('Sorry, the page you\'re looking for doesn\'t exist.', '404-day-weekend'); ?>
        </p>

        <p style="margin-bottom: 2rem;">
            <?php esc_html_e('Here are some helpful links instead:', '404-day-weekend'); ?>
        </p>

        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; max-width: 600px; margin: 0 auto;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hero-button" style="display: inline-block;">
                <?php esc_html_e('Go Home', '404-day-weekend'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/events')); ?>" class="hero-button" style="display: inline-block;">
                <?php esc_html_e('View Events', '404-day-weekend'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/blog')); ?>" class="hero-button" style="display: inline-block;">
                <?php esc_html_e('Read Blog', '404-day-weekend'); ?>
            </a>
        </div>

        <?php if (file_exists(get_template_directory() . '/assets/images/404-lager.png')) : ?>
            <div style="margin-top: 3rem; max-width: 400px; margin-left: auto; margin-right: auto; opacity: 0.5;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/404-lager.png'); ?>"
                     alt="404 Lager" style="width: 100%; height: auto;" />
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
