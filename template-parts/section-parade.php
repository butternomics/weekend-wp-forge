<?php
/**
 * Template part for displaying the parade section
 *
 * @package 404DayWeekend
 */
?>

<section class="section section-muted">
    <div class="container">
        <!-- Parade Header -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <?php if (file_exists(get_template_directory() . '/assets/images/logo-parade.png')) : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-parade.png'); ?>"
                     alt="Atlanta 404 Day Weekend Parade"
                     style="margin: 0 auto; width: 100%; max-width: 48rem; margin-bottom: 2rem;" />
            <?php endif; ?>

            <h2 style="font-size: clamp(1.875rem, 5vw, 3rem); margin-bottom: 1rem;">
                <?php esc_html_e('Join the 404 Day Parade!', '404-day-weekend'); ?>
            </h2>

            <p style="font-size: 1.125rem; color: var(--color-muted-foreground); max-width: 48rem; margin: 0 auto 0.5rem;">
                <?php esc_html_e('Join the 2nd Annual 404 Day Parade! There\'s no place like ATL, and no better way to celebrate its culture than during 404 Day Weekend!', '404-day-weekend'); ?>
            </p>

            <p style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary);">
                <?php echo esc_html(get_theme_mod('parade_details', 'Peachtree Street (Ralph McGill Blvd → Marietta St.) • Saturday, April 4th • 10 AM – 12 PM')); ?>
            </p>
        </div>

        <!-- CTA Buttons -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 3rem;">
            <a href="https://www.eventeny.com/events/2nd-404-day-parade-27361/"
               target="_blank"
               rel="noopener noreferrer"
               style="background-color: var(--color-primary); color: var(--color-secondary); padding: 1rem 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; font-size: 1.125rem; transition: background-color 0.2s; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); text-decoration: none;">
                <?php esc_html_e('Parade Registration', '404-day-weekend'); ?>
            </a>

            <a href="https://posh.vip/e/404-day-parade-1"
               target="_blank"
               rel="noopener noreferrer"
               style="background-color: var(--color-secondary); color: var(--color-primary); padding: 1rem 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; font-size: 1.125rem; transition: background-color 0.2s; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1); text-decoration: none;">
                <?php esc_html_e('Attend the Parade', '404-day-weekend'); ?>
            </a>

            <a href="https://docs.google.com/presentation/d/1Fkjc6nhXeej4xH8DeOf4cYKSeUp-VnKYsKCnzz-ByPk/edit"
               target="_blank"
               rel="noopener noreferrer"
               style="border: 2px solid var(--color-primary); color: var(--color-primary); background-color: transparent; padding: 1rem 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; font-size: 1.125rem; transition: all 0.2s; text-decoration: none;">
                <?php esc_html_e('Sponsorship Inquiries', '404-day-weekend'); ?>
            </a>
        </div>

        <!-- Map -->
        <?php if (file_exists(get_template_directory() . '/assets/images/parade-map.jpg')) : ?>
            <div style="max-width: 48rem; margin: 0 auto 4rem;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/parade-map.jpg'); ?>"
                     alt="404 Day Parade Route Map - Downtown Atlanta"
                     style="width: 100%; box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);" />
            </div>
        <?php endif; ?>

        <!-- Application Links -->
        <div style="text-align: center;">
            <h3 style="font-size: clamp(1.5rem, 3vw, 1.875rem); margin-bottom: 2rem;">
                <?php esc_html_e('Parade Applications', '404-day-weekend'); ?>
            </h3>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; max-width: 64rem; margin: 0 auto;">
                <?php
                $applications = array(
                    array('label' => 'Small Business', 'href' => 'https://www.eventeny.com/events/vendor/?id=43232'),
                    array('label' => 'Car & Motorcycle Group', 'href' => 'https://www.eventeny.com/events/vendor/?id=43248'),
                    array('label' => 'Corporate Partner', 'href' => 'https://www.eventeny.com/events/vendor/?id=43243'),
                    array('label' => 'Political', 'href' => 'https://www.eventeny.com/events/vendor/?id=43242'),
                    array('label' => 'Nonprofit', 'href' => 'https://www.eventeny.com/events/vendor/?id=43244'),
                    array('label' => 'Walking Group', 'href' => 'https://www.eventeny.com/events/vendor/?id=43246'),
                    array('label' => 'Schools & Marching Band', 'href' => 'https://www.eventeny.com/events/vendor/?id=43247'),
                    array('label' => 'Volunteer', 'href' => 'https://www.eventeny.com/events/vendor/?id=43249'),
                );

                foreach ($applications as $app) :
                ?>
                    <a href="<?php echo esc_url($app['href']); ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="background-color: white; border: 2px solid var(--color-primary); color: var(--color-primary); padding: 0.75rem 1rem; font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; transition: all 0.2s; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none;">
                        <?php echo esc_html($app['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
