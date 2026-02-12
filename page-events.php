<?php
/**
 * Template Name: Events Page
 * Template for displaying all events
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title"><?php esc_html_e('Event Schedule', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle">
            <?php echo esc_html(get_theme_mod('events_subtitle', 'April 1–5, 2026 • Atlanta, GA')); ?>
        </p>
    </div>
</div>

<!-- Featured 404 Day Weekend Events -->
<div class="section" style="padding-top: 1.5rem; padding-bottom: 0;">
    <div class="container">
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
            <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 1rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em;">
                <?php esc_html_e('Featured', '404-day-weekend'); ?>
            </span>
            <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin: 0;">
                <?php esc_html_e('404 Day Weekend Events', '404-day-weekend'); ?>
            </h2>
        </div>
        <p style="color: var(--color-muted-foreground); margin: 0;">
            <?php esc_html_e('Official events produced by the 404 Day Weekend team.', '404-day-weekend'); ?>
        </p>
    </div>
</div>

<!-- Event Schedule Section -->
<?php get_template_part('template-parts/section', 'events'); ?>

<!-- Partner Events Section -->
<section class="section section-muted">
    <div class="container">
        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 0.5rem;">
            <span style="border: 2px solid var(--color-primary); color: var(--color-primary); padding: 0.25rem 1rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em;">
                <?php esc_html_e('Partner', '404-day-weekend'); ?>
            </span>
            <h2 style="font-size: clamp(1.5rem, 3vw, 2rem); margin: 0;">
                <?php esc_html_e('Partner Events', '404-day-weekend'); ?>
            </h2>
        </div>
        <p style="color: var(--color-muted-foreground); margin-bottom: 2rem;">
            <?php esc_html_e('Events hosted by our partners and community during 404 Day Weekend.', '404-day-weekend'); ?>
        </p>

        <?php
        $partner_events = four04_day_get_partner_events();

        if ($partner_events->have_posts()) :
        ?>
            <div style="display: grid; grid-template-columns: 1fr; gap: 1rem;">
                <?php if (function_exists('four04_day_get_partner_events')) : ?>
                    <?php
                    $partner_events = four04_day_get_partner_events();
                    if ($partner_events->have_posts()) :
                        ?>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
                            <?php while ($partner_events->have_posts()) : $partner_events->the_post(); ?>
                                <?php
                                $partner_date = get_post_meta(get_the_ID(), '_partner_event_date', true);
                                $partner_link = get_post_meta(get_the_ID(), '_partner_event_link', true);
                                ?>
                                <a href="<?php echo esc_url($partner_link ? $partner_link : '#'); ?>"
                                   <?php echo $partner_link ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                                   class="event-card" style="display: flex; align-items: center; justify-content: space-between; padding: 1.25rem; text-decoration: none; transition: border-color 0.2s;">
                                    <div>
                                        <h3 style="font-size: 1rem; margin: 0 0 0.25rem 0;">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p style="font-size: 0.875rem; color: var(--color-muted-foreground); margin: 0;">
                                            <?php echo esc_html($partner_date); ?>
                                        </p>
                                    </div>
                                    <span style="color: rgba(27, 59, 54, 0.4); font-size: 1.125rem; margin-left: 1rem;">→</span>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php else : ?>
                        <p style="color: var(--color-muted-foreground); font-style: italic;">
                            <?php esc_html_e('Partner events coming soon!', '404-day-weekend'); ?>
                        </p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <p style="color: var(--color-muted-foreground); font-style: italic;">
                <?php esc_html_e('Partner events coming soon!', '404-day-weekend'); ?>
            </p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<!-- Sponsor Logos Section -->
<?php get_template_part('template-parts/section', 'sponsors'); ?>

<?php
get_footer();
