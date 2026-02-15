<?php
/**
 * Template part for displaying sponsor logos
 *
 * @package 404DayWeekend
 */
?>

<section class="section" style="background-color: white;">
    <div class="container">
        <h3 style="text-align: center; font-size: clamp(1.25rem, 2vw, 1.5rem); font-weight: 900; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-primary); margin-bottom: 0.75rem;">
            <?php esc_html_e('Thank You to Our Partners & Sponsors', '404-day-weekend'); ?>
        </h3>

        <p style="text-align: center; font-size: 0.875rem; color: var(--color-muted-foreground); margin-bottom: 2.5rem;">
            <?php esc_html_e('404 Day Weekend is made possible by the support of these incredible organizations.', '404-day-weekend'); ?>
        </p>

        <!-- Main partner banner -->
        <?php if (file_exists(get_template_directory() . '/assets/images/partner-logos.png')) : ?>
            <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 3rem;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/partner-logos.png'); ?>"
                     alt="Partners: Atlanta Influences Everything, Butter ATL, Finish First, Trap Music Museum"
                     style="width: 100%; max-width: 48rem; height: auto;" />
            </div>
        <?php endif; ?>

        <!-- Individual sponsor logo grid -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 2.5rem;">
            <?php
            // Query sponsors from custom post type
            $sponsors = new WP_Query(array(
                'post_type' => 'sponsor',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
            ));

            if ($sponsors->have_posts()) :
                while ($sponsors->have_posts()) : $sponsors->the_post();
                    $sponsor_logo = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $sponsor_url = get_post_meta(get_the_ID(), '_sponsor_url', true);
            ?>
                <div style="flex-shrink: 0;">
                    <?php if ($sponsor_logo) : ?>
                        <?php if (!empty($sponsor_url)) : ?>
                            <a href="<?php echo esc_url($sponsor_url); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($sponsor_logo); ?>"
                                     alt="<?php echo esc_attr(get_the_title()); ?>"
                                     style="height: clamp(3.5rem, 5vw, 5rem); width: auto; max-width: 180px; object-fit: contain; opacity: 0.8; transition: opacity 0.2s;" />
                            </a>
                        <?php else : ?>
                            <img src="<?php echo esc_url($sponsor_logo); ?>"
                                 alt="<?php echo esc_attr(get_the_title()); ?>"
                                 style="height: clamp(3.5rem, 5vw, 5rem); width: auto; max-width: 180px; object-fit: contain; opacity: 0.8;" />
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
