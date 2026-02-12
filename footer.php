    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="footer-inner">
            <!-- Footer Column 1: Logo & Social -->
            <div class="footer-section">
                <div class="footer-logo">
                    <?php if (file_exists(get_template_directory() . '/assets/images/logo-main.png')) : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                             alt="<?php bloginfo('name'); ?>" />
                    <?php else : ?>
                        <span style="color: var(--color-secondary); font-weight: 700; font-size: 1.5rem;">
                            <?php bloginfo('name'); ?>
                        </span>
                    <?php endif; ?>
                </div>
                <p>
                    <?php
                    $footer_description = get_theme_mod('footer_description',
                        'Celebrating Atlanta\'s culture, creativity, and community. Join us for a weekend of events that showcase the best of our city.');
                    echo esc_html($footer_description);
                    ?>
                </p>
                <div class="social-links">
                    <a href="<?php echo esc_url(get_theme_mod('instagram_url', 'https://www.instagram.com/butter.atl')); ?>"
                       target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Instagram', '404-day-weekend'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('twitter_url', 'https://twitter.com/atlantainfluenc')); ?>"
                       target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Twitter', '404-day-weekend'); ?>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('facebook_url', '#')); ?>"
                       target="_blank" rel="noopener noreferrer">
                        <?php esc_html_e('Facebook', '404-day-weekend'); ?>
                    </a>
                </div>
            </div>

            <!-- Footer Column 2: Quick Links -->
            <div class="footer-section">
                <h4><?php esc_html_e('Quick Links', '404-day-weekend'); ?></h4>
                <div class="footer-links">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => 'four04_day_footer_fallback_menu',
                    ));
                    ?>
                </div>
            </div>

            <!-- Footer Column 3: Contact -->
            <div class="footer-section">
                <h4><?php esc_html_e('Contact Us', '404-day-weekend'); ?></h4>
                <p>
                    <?php esc_html_e('For additional questions, please email us at', '404-day-weekend'); ?><br />
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'official404day@gmail.com')); ?>"
                       style="text-decoration: underline; font-weight: 700;">
                        <?php echo esc_html(get_theme_mod('contact_email', 'official404day@gmail.com')); ?>
                    </a>
                </p>

                <h4 style="margin-top: 1.5rem;"><?php esc_html_e('Parade Applications', '404-day-weekend'); ?></h4>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 0.75rem;">
                    <?php
                    $parade_links = array(
                        array('label' => 'Small Business', 'url' => 'https://www.eventeny.com/events/vendor/?id=43232'),
                        array('label' => 'Nonprofit', 'url' => 'https://www.eventeny.com/events/vendor/?id=43244'),
                        array('label' => 'Schools', 'url' => 'https://www.eventeny.com/events/vendor/?id=43247'),
                        array('label' => 'Walking Groups', 'url' => 'https://www.eventeny.com/events/vendor/?id=43246'),
                        array('label' => 'Volunteers', 'url' => 'https://www.eventeny.com/events/vendor/?id=43249'),
                    );

                    foreach ($parade_links as $link) :
                    ?>
                        <a href="<?php echo esc_url($link['url']); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           style="font-size: 0.75rem; border: 1px solid rgba(212, 185, 130, 0.3); padding: 0.25rem 0.75rem; transition: all 0.2s;">
                            <?php echo esc_html($link['label']); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                <?php esc_html_e('All rights reserved.', '404-day-weekend'); ?>
            </p>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php

/**
 * Footer fallback menu
 */
function four04_day_footer_fallback_menu() {
    ?>
    <ul id="footer-menu">
        <li><a href="<?php echo esc_url(home_url('/events')); ?>"><?php esc_html_e('Events', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/parade')); ?>"><?php esc_html_e('Parade', '404-day-weekend'); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>"><?php esc_html_e('Blog', '404-day-weekend'); ?></a></li>
        <li><a href="https://www.eventeny.com/events/vendor/?id=43249" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Volunteer', '404-day-weekend'); ?></a></li>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdNfOTJ-LjDyE1GaD1GIdhS3tPRhF11ieaKoExBF6TnDogRcA/viewform" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Vendor Application', '404-day-weekend'); ?></a></li>
    </ul>
    <?php
}
