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
            <div class="events-grid">
                <?php while ($partner_events->have_posts()) : $partner_events->the_post(); ?>
                    <?php
                    // Get partner event meta data
                    $partner_date = get_post_meta(get_the_ID(), '_partner_event_date', true);
                    $partner_time = get_post_meta(get_the_ID(), '_partner_event_time', true);
                    $partner_location = get_post_meta(get_the_ID(), '_partner_event_location', true);
                    $partner_description = get_post_meta(get_the_ID(), '_partner_event_description', true);
                    $partner_link = get_post_meta(get_the_ID(), '_partner_event_link', true);
                    $partner_button_text = get_post_meta(get_the_ID(), '_partner_event_button_text', true);
                    $partner_flyer_alt = get_post_meta(get_the_ID(), '_partner_event_flyer_alt', true);

                    // Get featured image (flyer)
                    $flyer_url = get_the_post_thumbnail_url(get_the_ID(), 'event-flyer');
                    ?>

                    <div class="event-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="event-image">
                                <img src="<?php echo esc_url($flyer_url); ?>"
                                     alt="<?php echo esc_attr($partner_flyer_alt ? $partner_flyer_alt : get_the_title()); ?>"
                                     loading="lazy" />
                            </div>
                        <?php endif; ?>

                        <div class="event-content">
                            <h3 class="event-title"><?php the_title(); ?></h3>

                            <?php if ($partner_time) : ?>
                                <p class="event-time"><?php echo esc_html($partner_time); ?></p>
                            <?php elseif ($partner_date) : ?>
                                <p class="event-time"><?php echo esc_html($partner_date); ?></p>
                            <?php endif; ?>

                            <?php if ($partner_location) : ?>
                                <p class="event-location"><?php echo esc_html($partner_location); ?></p>
                            <?php endif; ?>

                            <?php if ($partner_description) : ?>
                                <p class="event-description"><?php echo esc_html($partner_description); ?></p>
                            <?php endif; ?>

                            <?php if ($partner_button_text || $partner_link) : ?>
                                <?php if ($partner_link) : ?>
                                    <a href="<?php echo esc_url($partner_link); ?>"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="event-button">
                                        <?php echo esc_html($partner_button_text ? $partner_button_text : 'Learn More'); ?>
                                    </a>
                                <?php else : ?>
                                    <span class="event-button event-button-disabled">
                                        <?php echo esc_html($partner_button_text ? $partner_button_text : 'Coming Soon'); ?>
                                    </span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p style="text-align: center; color: var(--color-muted-foreground); font-style: italic;">
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
