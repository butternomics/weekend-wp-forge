<?php
/**
 * Template part for displaying the news/press section
 *
 * @package 404DayWeekend
 */
?>

<section id="news" class="section section-muted">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e('In The News', '404-day-weekend'); ?></h2>
            <p class="section-subtitle">
                <?php esc_html_e('See what people are saying about 404 Day Weekend', '404-day-weekend'); ?>
            </p>
        </div>

        <?php
        $news_links = four04_day_get_news_links(6); // Get latest 6 news links

        if ($news_links->have_posts()) :
        ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
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
                       style="display: block; background: white; border: 1px solid var(--color-border, #e5e7eb); padding: 1.5rem; text-decoration: none; transition: all 0.2s; border-radius: 8px;">

                        <?php if ($link_source) : ?>
                            <div style="display: inline-block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: var(--color-secondary); margin-bottom: 0.75rem;">
                                <?php echo esc_html($link_source); ?>
                            </div>
                        <?php endif; ?>

                        <h3 style="font-size: 1.125rem; line-height: 1.4; margin: 0 0 0.5rem 0; color: var(--color-primary);">
                            <?php the_title(); ?>
                        </h3>

                        <?php if ($link_date) : ?>
                            <p style="font-size: 0.875rem; color: var(--color-muted-foreground); margin: 0 0 0.75rem 0;">
                                <?php echo esc_html($link_date); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($excerpt) : ?>
                            <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-foreground); margin: 0 0 1rem 0;">
                                <?php echo esc_html($excerpt); ?>
                            </p>
                        <?php endif; ?>

                        <span style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; font-weight: 600; color: var(--color-secondary);">
                            <?php esc_html_e('Read Article', '404-day-weekend'); ?>
                            <span style="font-size: 1rem;">→</span>
                        </span>
                    </a>

                <?php endwhile; ?>
            </div>

            <?php if ($news_links->found_posts > 6) : ?>
                <div style="text-align: center; margin-top: 2rem;">
                    <a href="<?php echo esc_url(home_url('/news')); ?>"
                       class="btn btn-secondary">
                        <?php esc_html_e('View All Press Coverage', '404-day-weekend'); ?>
                    </a>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <p style="text-align: center; color: var(--color-muted-foreground); font-style: italic;">
                <?php esc_html_e('Press coverage coming soon! Check back later.', '404-day-weekend'); ?>
            </p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>

<style>
.news-card:hover {
    border-color: var(--color-secondary) !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}
</style>
