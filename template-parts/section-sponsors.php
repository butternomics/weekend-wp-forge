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
            $sponsors = array(
                array('src' => 'sponsor-showcase-atlanta.jpg', 'alt' => 'Showcase Atlanta', 'href' => ''),
                array('src' => 'sponsor-beltline.jpg', 'alt' => 'Atlanta Beltline', 'href' => ''),
                array('src' => 'sponsor-grady.jpg', 'alt' => 'Grady Health', 'href' => ''),
            );

            foreach ($sponsors as $sponsor) :
                if (file_exists(get_template_directory() . '/assets/images/' . $sponsor['src'])) :
            ?>
                <div style="flex-shrink: 0;">
                    <?php if (!empty($sponsor['href'])) : ?>
                        <a href="<?php echo esc_url($sponsor['href']); ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $sponsor['src']); ?>"
                                 alt="<?php echo esc_attr($sponsor['alt']); ?>"
                                 style="height: clamp(3.5rem, 5vw, 5rem); width: auto; max-width: 180px; object-fit: contain; opacity: 0.8; transition: opacity 0.2s;" />
                        </a>
                    <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $sponsor['src']); ?>"
                             alt="<?php echo esc_attr($sponsor['alt']); ?>"
                             style="height: clamp(3.5rem, 5vw, 5rem); width: auto; max-width: 180px; object-fit: contain; opacity: 0.8;" />
                    <?php endif; ?>
                </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>
