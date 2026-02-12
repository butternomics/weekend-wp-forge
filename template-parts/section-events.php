<?php
/**
 * Template part for displaying the events section
 *
 * @package 404DayWeekend
 */
?>

<section id="schedule" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e('Mark Your Calendar', '404-day-weekend'); ?></h2>
            <p style="text-align: center; font-size: clamp(1.5rem, 4vw, 2.25rem); font-weight: 900; color: var(--color-primary); margin-bottom: 1rem;">
                <?php echo esc_html(get_theme_mod('events_dates', 'April 1 – 5, 2026')); ?>
            </p>
            <p class="section-subtitle">
                <?php esc_html_e('Get ready for a weekend full of celebration, culture, and connection!', '404-day-weekend'); ?>
            </p>
        </div>

        <?php
        $events = four04_day_get_events();

        if ($events->have_posts()) :
        ?>
            <div class="events-grid">
                <?php while ($events->have_posts()) : $events->the_post(); ?>
                    <?php
                    // Get event meta data
                    $event_time = get_post_meta(get_the_ID(), '_event_time', true);
                    $event_location = get_post_meta(get_the_ID(), '_event_location', true);
                    $event_description = get_post_meta(get_the_ID(), '_event_description', true);
                    $event_button_text = get_post_meta(get_the_ID(), '_event_button_text', true);
                    $event_button_link = get_post_meta(get_the_ID(), '_event_button_link', true);
                    $event_flyer_alt = get_post_meta(get_the_ID(), '_event_flyer_alt', true);

                    // Get featured image (flyer)
                    $flyer_id = get_post_thumbnail_id();
                    $flyer_url = get_the_post_thumbnail_url(get_the_ID(), 'event-flyer');
                    ?>

                    <div class="event-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="event-image">
                                <img src="<?php echo esc_url($flyer_url); ?>"
                                     alt="<?php echo esc_attr($event_flyer_alt ? $event_flyer_alt : get_the_title()); ?>"
                                     loading="lazy" />
                            </div>
                        <?php endif; ?>

                        <div class="event-content">
                            <h3 class="event-title"><?php the_title(); ?></h3>

                            <?php if ($event_time) : ?>
                                <p class="event-time"><?php echo esc_html($event_time); ?></p>
                            <?php endif; ?>

                            <?php if ($event_location) : ?>
                                <p class="event-location"><?php echo esc_html($event_location); ?></p>
                            <?php endif; ?>

                            <?php if ($event_description) : ?>
                                <p class="event-description"><?php echo esc_html($event_description); ?></p>
                            <?php endif; ?>

                            <?php if ($event_button_text) : ?>
                                <?php if ($event_button_link) : ?>
                                    <a href="<?php echo esc_url($event_button_link); ?>"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       class="event-button">
                                        <?php echo esc_html($event_button_text); ?>
                                    </a>
                                <?php else : ?>
                                    <span class="event-button event-button-disabled">
                                        <?php echo esc_html($event_button_text); ?>
                                    </span>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p style="text-align: center; color: var(--color-muted-foreground); font-style: italic;">
                <?php esc_html_e('Events coming soon! Check back later for our full schedule.', '404-day-weekend'); ?>
            </p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>
