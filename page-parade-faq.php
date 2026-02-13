<?php
/**
 * Template Name: Parade FAQ
 * Template for the 404 Day Parade FAQ page
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title"><?php esc_html_e('Parade FAQ', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle">
            <?php esc_html_e('Everything you need to know about the 404 Day Parade', '404-day-weekend'); ?>
        </p>
    </div>
</div>

<section class="section">
    <div class="container" style="max-width: 64rem;">

        <!-- YouTube Video Section -->
        <div style="margin-bottom: 4rem;">
            <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);">
                <iframe
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                    src="https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE"
                    title="404 Day Parade Highlight Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <p style="text-align: center; margin-top: 1rem; color: var(--color-muted-foreground); font-size: 0.875rem;">
                <?php esc_html_e('Highlights from last year\'s 404 Day Parade', '404-day-weekend'); ?>
            </p>
        </div>

        <!-- Parade Application Links -->
        <div style="background-color: var(--color-primary); color: var(--color-secondary); padding: 2rem; text-align: center; margin-bottom: 4rem; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);">
            <h2 style="font-size: clamp(1.5rem, 3vw, 1.875rem); margin-bottom: 1.5rem; color: var(--color-secondary);">
                <?php esc_html_e('Click below to complete a parade application for your organization', '404-day-weekend'); ?>
            </h2>

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
                       style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.75rem 1rem; font-weight: 700; font-size: 0.875rem; text-transform: uppercase; letter-spacing: 0.05em; transition: all 0.2s; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center;">
                        <?php echo esc_html($app['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- FAQ Content -->
        <div style="background-color: white; padding: 3rem; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);">

            <!-- General Information Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('General Information', '404-day-weekend'); ?>
                </h2>

                <?php
                $general_faqs = array(
                    array(
                        'question' => 'What is the 404 Day Parade?',
                        'answer' => 'The 404 Day Parade is an annual celebration of Atlanta\'s culture, history, and community pride. This event showcases local tastemakers, businesses, and community organizations, bringing together residents and visitors for a day of festivities.',
                    ),
                    array(
                        'question' => 'When and where will the parade take place?',
                        'answer' => 'The parade will take place on Saturday, April 4, 2026, in Downtown Atlanta. The route will begin at Ralph McGill Ave & Cortland St. and end at the intersection of Pryor St and MLK near Underground Atlanta.',
                    ),
                    array(
                        'question' => 'Is there an entry fee to attend the parade?',
                        'answer' => 'No, the 404 Day Parade is FREE and open to the public.',
                    ),
                    array(
                        'question' => 'Will the parade still happen if it rains?',
                        'answer' => 'Yes, the parade is rain or shine. In the event of extreme inclement weather, the committee will communicate timely information for the safety of participants and spectators.',
                    ),
                );

                foreach ($general_faqs as $faq) :
                    echo four04_day_render_faq_item($faq);
                endforeach;
                ?>
            </div>

            <!-- Participation Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('Participation', '404-day-weekend'); ?>
                </h2>

                <?php
                $participation_faqs = array(
                    array(
                        'question' => 'How can I participate in the parade?',
                        'answer' => 'Individuals, businesses, and organizations can apply to participate as float entries, performers, or volunteers. Applications can be submitted through our official website 404weekend.com.',
                    ),
                    array(
                        'question' => 'Are there any restrictions on parade entries?',
                        'answer' => 'Yes, all entries must align with the spirit of the event and be family-friendly. Specific guidelines on float sizes, themes, and safety regulations can be found in the participation packet available on our website.',
                    ),
                );

                foreach ($participation_faqs as $faq) :
                    echo four04_day_render_faq_item($faq);
                endforeach;
                ?>
            </div>

            <!-- Event Logistics Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('Event Logistics', '404-day-weekend'); ?>
                </h2>

                <?php
                $logistics_faqs = array(
                    array(
                        'question' => 'What time does the parade start and end?',
                        'answer' => 'The parade is scheduled to begin at 10 AM and conclude by 12 PM. Participants should arrive at their designated check-in points between 8-9 AM.',
                    ),
                    array(
                        'question' => 'Where can I park?',
                        'answer' => 'Limited public parking options will be available at designated lots and garages near the parade route. Rideshare services and public transportation are also recommended due to anticipated road closures. The MARTA stations around the parade route include Civic Center (top of route), Peachtree Center (middle of route), and Five Points (end of route).',
                    ),
                    array(
                        'question' => 'Will streets be closed during the event?',
                        'answer' => 'Yes, certain streets along the parade route will be closed to traffic. A full list of closures and alternate routes will be posted on our website and social media channels before the event.',
                    ),
                );

                foreach ($logistics_faqs as $faq) :
                    echo four04_day_render_faq_item($faq);
                endforeach;
                ?>
            </div>

            <!-- Accessibility & Safety Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('Accessibility & Safety', '404-day-weekend'); ?>
                </h2>

                <?php
                $accessibility_faqs = array(
                    array(
                        'question' => 'Is the event accessible for individuals with disabilities?',
                        'answer' => 'Yes, the parade route will include designated viewing areas for individuals with disabilities. If you require specific accommodations, please contact us at official404day@gmail.com.',
                    ),
                    array(
                        'question' => 'What security measures are in place?',
                        'answer' => 'The event will have a security presence, including law enforcement and event staff, to ensure a safe and enjoyable experience for all attendees. Bags may be subject to inspection at entry points.',
                    ),
                );

                foreach ($accessibility_faqs as $faq) :
                    echo four04_day_render_faq_item($faq);
                endforeach;
                ?>
            </div>

            <!-- Vendors & Sponsorships Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('Vendors & Sponsorships', '404-day-weekend'); ?>
                </h2>

                <?php
                $vendor_faqs = array(
                    array(
                        'question' => 'How can I become a vendor at the event?',
                        'answer' => 'We will not be hosting vendors this year.',
                    ),
                    array(
                        'question' => 'Are sponsorship opportunities available?',
                        'answer' => 'Yes! Businesses and organizations interested in sponsoring the parade can explore various sponsorship levels by contacting our sponsorship team at official404day@gmail.com using SUBJECT: SPONSORSHIP INFO',
                    ),
                );

                foreach ($vendor_faqs as $faq) :
                    echo four04_day_render_faq_item($faq);
                endforeach;
                ?>
            </div>

            <!-- Contact Information Section -->
            <div style="margin-bottom: 0;">
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-primary); margin-bottom: 2rem; border-bottom: 3px solid var(--color-primary); padding-bottom: 0.5rem;">
                    <?php esc_html_e('Contact Information', '404-day-weekend'); ?>
                </h2>

                <div style="padding: 1.5rem; background-color: var(--color-muted); border-left: 4px solid var(--color-primary);">
                    <p style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 1rem;">
                        For additional questions, please visit <a href="https://404weekend.com" style="color: var(--color-primary); font-weight: 700; text-decoration: underline;">404weekend.com</a> or email us at <a href="mailto:official404day@gmail.com" style="color: var(--color-primary); font-weight: 700; text-decoration: underline;">official404day@gmail.com</a>.
                    </p>
                    <p style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 1rem;">
                        Stay updated by following us on our partner social media channels:
                    </p>
                    <ul style="font-size: 1.125rem; line-height: 1.8; list-style: none; padding-left: 0;">
                        <li style="margin-bottom: 0.5rem;">📱 @butter.atl</li>
                        <li style="margin-bottom: 0.5rem;">📱 @atlantainfluenceseverything</li>
                        <li style="margin-bottom: 0.5rem;">📱 @trapmusicmusuem</li>
                        <li style="margin-bottom: 0.5rem;">📱 @finishfirst_</li>
                    </ul>
                    <p style="font-size: 1.25rem; font-weight: 700; color: var(--color-primary); margin-top: 1.5rem; margin-bottom: 0;">
                        We look forward to celebrating with you at the 2nd annual 404 Day Parade!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    details[open] summary span {
        transform: rotate(45deg);
    }

    summary::-webkit-details-marker {
        display: none;
    }

    details summary:hover {
        opacity: 0.8;
    }
</style>

<?php
/**
 * Helper function to render FAQ items
 */
function four04_day_render_faq_item($faq) {
    ob_start();
    ?>
    <div style="border-bottom: 1px solid var(--color-border); padding: 1.5rem 0;">
        <details style="cursor: pointer;">
            <summary style="font-size: 1.25rem; font-weight: 700; color: var(--color-primary); text-transform: uppercase; list-style: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                <?php echo esc_html($faq['question']); ?>
                <span style="font-size: 1.5rem; transition: transform 0.2s;">+</span>
            </summary>
            <div style="margin-top: 1rem; font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6;">
                <?php echo esc_html($faq['answer']); ?>
            </div>
        </details>
    </div>
    <?php
    return ob_get_clean();
}

get_footer();
