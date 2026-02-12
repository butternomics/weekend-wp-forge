<?php
/**
 * Template Name: News Page
 * Template for displaying all news/press links
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-header-title"><?php esc_html_e('Press & News', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle">
            <?php esc_html_e('Media coverage and articles about 404 Day Weekend', '404-day-weekend'); ?>
        </p>
    </div>
</div>

<section class="section">
    <div class="container">
        <?php
        $news_links = four04_day_get_news_links(); // Get all news links

        if ($news_links->have_posts()) :
        ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                <?php while ($news_links->have_posts()) : $news_links->the_post(); ?>
                    <?php
                    $link_url = get_post_meta(get_the_ID(), '_news_link_url', true);
                    $link_source = get_post_meta(get_the_ID(), '_news_link_source', true);
                    $link_date = get_post_meta(get_the_ID(), '_news_link_date', true);
                    $excerpt = get_the_excerpt();
                    ?>

                    <a href="<?php echo esc_url($link_url); ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="news-card"
                       style="display: flex; flex-direction: column; background: white; border: 1px solid var(--color-border, #e5e7eb); padding: 2rem; text-decoration: none; transition: all 0.2s; border-radius: 8px; height: 100%;">

                        <?php if ($link_source || $link_date) : ?>
                            <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1rem; flex-wrap: wrap;">
                                <?php if ($link_source) : ?>
                                    <span style="display: inline-block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-secondary);">
                                        <?php echo esc_html($link_source); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($link_date) : ?>
                                    <span style="font-size: 0.875rem; color: var(--color-muted-foreground);">
                                        <?php echo esc_html($link_date); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <h3 style="font-size: 1.25rem; line-height: 1.4; margin: 0 0 1rem 0; color: var(--color-primary); flex-grow: 1;">
                            <?php the_title(); ?>
                        </h3>

                        <?php if ($excerpt) : ?>
                            <p style="font-size: 0.9375rem; line-height: 1.6; color: var(--color-foreground); margin: 0 0 1.5rem 0;">
                                <?php echo esc_html($excerpt); ?>
                            </p>
                        <?php endif; ?>

                        <span style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; font-weight: 600; color: var(--color-secondary); margin-top: auto;">
                            <?php esc_html_e('Read Full Article', '404-day-weekend'); ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="flex-shrink: 0;">
                                <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>

                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 4rem 0;">
                <p style="font-size: 1.125rem; color: var(--color-muted-foreground); font-style: italic; margin-bottom: 1rem;">
                    <?php esc_html_e('No press coverage yet.', '404-day-weekend'); ?>
                </p>
                <p style="color: var(--color-muted-foreground);">
                    <?php esc_html_e('Check back soon for articles and media coverage about 404 Day Weekend!', '404-day-weekend'); ?>
                </p>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>

<style>
.news-card:hover {
    border-color: var(--color-secondary) !important;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-4px);
}
</style>

<?php
get_footer();
