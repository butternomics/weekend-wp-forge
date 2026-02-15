<?php
/**
 * Template Name: 404 Fund Page
 * Template for the 404 Fund page
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title"><?php esc_html_e('The 404 Fund', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle">
            <?php echo esc_html(get_theme_mod('fund_subtitle', 'Supporting Atlanta\'s Future, One Community at a Time')); ?>
        </p>
    </div>
</div>

<!-- Hero Image Section -->
<?php if (file_exists(get_template_directory() . '/assets/images/fund-hero.jpg')) : ?>
<section style="padding: 0 0 2rem 0;">
    <div class="container" style="max-width: 80rem;">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/fund-hero.jpg'); ?>"
             alt="404 Fund Scholarship Recipients"
             style="width: 100%; height: auto; display: block; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);" />
    </div>
</section>
<?php endif; ?>

<!-- Mission Section -->
<section class="section">
    <div class="container" style="max-width: 80rem;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 3rem; align-items: center;">
            <?php if (function_exists('get_field')) : // ACF support ?>
                <div style="grid-column: 1;">
            <?php else : ?>
                <div style="grid-column: 1; max-width: 960px;">
            <?php endif; ?>
                <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 1rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block;">
                    <?php esc_html_e('Our Mission', '404-day-weekend'); ?>
                </span>
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); margin: 1rem 0 1.5rem 0;">
                    <?php echo esc_html(get_theme_mod('fund_mission_title', 'Supporting 404 Day = Supporting the 404 Fund')); ?>
                </h2>

                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6; margin-bottom: 1rem;">
                    The 404 Fund is a non-profit in partnership with the Community Foundation For Greater Atlanta. It is the philanthropic arm of 404 Day Weekend.
                </p>

                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6; margin-bottom: 1.5rem;">
                    This fund is dedicated to enhancing life in Atlanta by offering financial support to organizations focused on <strong style="color: var(--color-primary);">education</strong>, <strong style="color: var(--color-primary);">affordable housing</strong>, <strong style="color: var(--color-primary);">food insecurity</strong>, and <strong style="color: var(--color-primary);">mental health</strong>.
                </p>

                <p style="font-size: 0.875rem; color: var(--color-muted-foreground); font-style: italic;">
                    A portion of the proceeds from each 404 Day Weekend event goes to The 404 Fund.
                </p>
            </div>

            <?php if (file_exists(get_template_directory() . '/assets/images/logo-404fund.webp')) : ?>
                <div style="display: flex; align-items: center; justify-content: center; background-color: var(--color-primary); padding: 3rem; border-radius: 0;">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-404fund.webp'); ?>"
                         alt="The 404 Fund" style="width: 100%; max-width: 20rem; height: auto;" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Economic Impact Section -->
<section class="section section-primary">
    <div class="container" style="text-align: center;">
        <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); margin-bottom: 3rem; color: var(--color-secondary);">
            <?php esc_html_e('Economic Impact', '404-day-weekend'); ?>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
            <div style="text-align: center;">
                <p style="font-size: clamp(3rem, 6vw, 3.75rem); font-weight: 900; color: var(--color-secondary); margin: 0;">
                    <?php echo esc_html(get_theme_mod('fund_stat_attendees', '100K+')); ?>
                </p>
                <p style="color: rgba(212, 185, 130, 0.7); text-transform: uppercase; letter-spacing: 0.05em; font-size: 0.875rem; margin-top: 0.5rem;">
                    <?php esc_html_e('Total Attendees', '404-day-weekend'); ?>
                </p>
            </div>

            <div style="text-align: center;">
                <p style="font-size: clamp(3rem, 6vw, 3.75rem); font-weight: 900; color: var(--color-secondary); margin: 0;">
                    <?php echo esc_html(get_theme_mod('fund_stat_impact', '$2.7M+')); ?>
                </p>
                <p style="color: rgba(212, 185, 130, 0.7); text-transform: uppercase; letter-spacing: 0.05em; font-size: 0.875rem; margin-top: 0.5rem;">
                    <?php esc_html_e('Economic Impact Since 2022', '404-day-weekend'); ?>
                </p>
            </div>

            <div style="text-align: center;">
                <p style="font-size: clamp(3rem, 6vw, 3.75rem); font-weight: 900; color: var(--color-secondary); margin: 0;">
                    <?php echo esc_html(get_theme_mod('fund_stat_scholarships', '$215K+')); ?>
                </p>
                <p style="color: rgba(212, 185, 130, 0.7); text-transform: uppercase; letter-spacing: 0.05em; font-size: 0.875rem; margin-top: 0.5rem;">
                    <?php esc_html_e('Scholarships Awarded', '404-day-weekend'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="section">
    <div class="container" style="max-width: 80rem;">
        <h2 style="text-align: center; font-size: clamp(1.875rem, 4vw, 2.25rem); margin-bottom: 3rem;">
            <?php esc_html_e('Our Programs', '404-day-weekend'); ?>
        </h2>

        <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
            <?php if (function_exists('get_field')) : // ACF support ?>
                <?php if (have_rows('fund_programs')) : ?>
                    <?php while (have_rows('fund_programs')) : the_row(); ?>
                        <div style="background-color: var(--color-card); border: 1px solid var(--color-border); padding: 2rem;">
                            <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 1rem;">
                                <?php echo esc_html(get_sub_field('category')); ?>
                            </span>
                            <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">
                                <?php echo esc_html(get_sub_field('title')); ?>
                            </h3>
                            <p style="color: var(--color-muted-foreground); line-height: 1.6;">
                                <?php echo esc_html(get_sub_field('description')); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else : // Default programs ?>
                <div style="background-color: var(--color-card); border: 1px solid var(--color-border); overflow: hidden;">
                    <?php if (file_exists(get_template_directory() . '/assets/images/fund-scholarship.jpg')) : ?>
                        <div style="width: 100%; overflow: hidden;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/fund-scholarship.jpg'); ?>"
                                 alt="404 Fund Scholarship Recipients"
                                 style="width: 100%; height: auto; display: block;" />
                        </div>
                    <?php endif; ?>
                    <div style="padding: 2rem;">
                        <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 1rem;">
                            <?php esc_html_e('Education', '404-day-weekend'); ?>
                        </span>
                        <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">
                            <?php esc_html_e('404 Day Scholarship', '404-day-weekend'); ?>
                        </h3>
                        <p style="color: var(--color-muted-foreground); line-height: 1.6;">
                            Each year, thousands of students of color in Georgia leave college because of financial gaps as small as $1,500. The 404 Fund Scholarship was created to change that — helping juniors and seniors stay on track to graduate. In partnership with the AUC Consortium, we award scholarships to support the next generation of Atlanta's talent.
                        </p>
                    </div>
                </div>

                <div style="background-color: var(--color-card); border: 1px solid var(--color-border); overflow: hidden;">
                    <?php if (file_exists(get_template_directory() . '/assets/images/fund-grant.png')) : ?>
                        <div style="width: 100%; overflow: hidden;">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/fund-grant.png'); ?>"
                                 alt="Maynard Jackson Small Business Grant Recipient - The Grocery Spot"
                                 style="width: 100%; height: auto; display: block;" />
                        </div>
                    <?php endif; ?>
                    <div style="padding: 2rem;">
                        <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block; margin-bottom: 1rem;">
                            <?php esc_html_e('Small Business', '404-day-weekend'); ?>
                        </span>
                        <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">
                            <?php esc_html_e('Maynard Jackson Small Business Grant', '404-day-weekend'); ?>
                        </h3>
                        <p style="color: var(--color-muted-foreground); line-height: 1.6;">
                            Small businesses power Georgia's economy, and Atlanta is the hub. The Maynard Jackson Small Business Grant honors that legacy, providing critical support to help local businesses overcome challenges and grow — continuing Maynard Jackson's vision for a thriving, inclusive entrepreneurial ecosystem in Atlanta.
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Our Friends Section -->
<section class="section section-muted">
    <div class="container" style="max-width: 80rem; text-align: center;">
        <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); margin-bottom: 1.5rem;">
            <?php esc_html_e('Our Friends', '404-day-weekend'); ?>
        </h2>
        <p style="color: var(--color-muted-foreground); max-width: 40rem; margin: 0 auto 3rem;">
            <?php esc_html_e('The 404 Fund is supported by organizations that believe in Atlanta\'s future.', '404-day-weekend'); ?>
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; text-align: center;">
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
                    $sponsor_description = get_post_meta(get_the_ID(), '_sponsor_description', true);
                    $sponsor_logo = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
                <div style="background-color: var(--color-card); border: 1px solid var(--color-border); padding: 1.5rem; display: flex; flex-direction: column; align-items: center; min-height: 280px;">
                    <?php if ($sponsor_logo) : ?>
                        <div style="height: 80px; width: 100%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                            <img src="<?php echo esc_url($sponsor_logo); ?>"
                                 alt="<?php echo esc_attr(get_the_title()); ?>"
                                 style="max-height: 80px; max-width: 180px; width: auto; height: auto; object-fit: contain;" />
                        </div>
                    <?php endif; ?>
                    <h4 style="font-size: 1.125rem; margin-bottom: 1rem;">
                        <?php the_title(); ?>
                    </h4>
                    <?php if ($sponsor_description) : ?>
                        <p style="font-size: 0.875rem; color: var(--color-muted-foreground);">
                            <?php echo esc_html($sponsor_description); ?>
                        </p>
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

<!-- 404 Lager Section -->
<section class="section">
    <div class="container" style="max-width: 80rem;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 3rem; align-items: center;">
            <?php if (file_exists(get_template_directory() . '/assets/images/404-lager.png')) : ?>
                <div style="overflow: hidden; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15); border: 1px solid var(--color-border);">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/404-lager.png'); ?>"
                         alt="404 Atlanta Lager by Monday Night Brewing" style="width: 100%; height: auto;" />
                </div>
            <?php endif; ?>

            <div>
                <span style="background-color: var(--color-secondary); color: var(--color-primary); padding: 0.25rem 1rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; display: inline-block;">
                    <?php esc_html_e('Partnership', '404-day-weekend'); ?>
                </span>
                <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); margin: 1rem 0 1.5rem 0;">
                    <?php esc_html_e('404 Day × Monday Night Brewing', '404-day-weekend'); ?>
                </h2>

                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6; margin-bottom: 1rem;">
                    In 2024, Monday Night Brewing launched <strong style="color: var(--color-primary);">404 Atlanta Lager</strong>.
                </p>

                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6; margin-bottom: 1rem;">
                    Monday Night Brewing is dedicating <strong style="color: var(--color-primary);">4.04% of net proceeds</strong> from 404 Atlanta Lager to The 404 Fund.
                </p>

                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6;">
                    This non-profit entity supports: scholarships and educational grants; youth education and employment initiatives; housing and food insecurity services; and mental health programs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-primary" style="text-align: center;">
    <div class="container" style="max-width: 48rem;">
        <?php if (file_exists(get_template_directory() . '/assets/images/logo-main.png')) : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                 alt="404 Day Weekend" style="width: 6rem; margin: 0 auto 1.5rem;" />
        <?php endif; ?>

        <h2 style="font-size: clamp(1.875rem, 4vw, 2.25rem); color: var(--color-secondary); margin-bottom: 1rem;">
            <?php esc_html_e('Support the 404 Fund', '404-day-weekend'); ?>
        </h2>

        <p style="color: rgba(212, 185, 130, 0.7); font-size: 1.125rem; margin-bottom: 2rem;">
            <?php echo esc_html(get_theme_mod('fund_cta_text', 'Attend the 3rd Annual 404 Fund Scholarship Gala on April 2, 2026 at Monday Night Brewery.')); ?>
        </p>

        <a href="<?php echo esc_url(get_theme_mod('fund_cta_link', 'https://events.eventnoire.com/e/3rd-annual-404-fund-scholarship-gala')); ?>"
           target="_blank"
           rel="noopener noreferrer"
           style="display: inline-block; background-color: var(--color-secondary); color: var(--color-primary); padding: 1rem 2.5rem; font-size: 1.125rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; transition: background-color 0.2s; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);">
            <?php esc_html_e('Get Gala Tickets', '404-day-weekend'); ?>
        </a>
    </div>
</section>

<!-- Sponsor Logos Section -->
<?php get_template_part('template-parts/section', 'sponsors'); ?>

<?php
get_footer();
