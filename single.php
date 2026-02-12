<?php
/**
 * The template for displaying single blog posts
 *
 * @package 404DayWeekend
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
            <div class="container container-narrow">
                <div class="blog-meta" style="justify-content: center; margin-bottom: 1rem;">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                    ?>
                        <span class="blog-category"><?php echo esc_html($categories[0]->name); ?></span>
                    <?php endif; ?>
                    <time class="blog-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                </div>

                <h1 class="page-header-title"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-top: 2rem;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; max-width: 800px; margin: 0 auto;')); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <main class="section">
            <div class="container container-narrow">
                <div class="entry-content" style="font-size: 1.125rem; line-height: 1.8; color: var(--color-foreground);">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', '404-day-weekend'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

                <?php if (get_the_tags()) : ?>
                    <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--color-border);">
                        <strong><?php esc_html_e('Tags:', '404-day-weekend'); ?></strong>
                        <?php the_tags('<span style="margin-left: 0.5rem;">', ', ', '</span>'); ?>
                    </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--color-border); display: flex; justify-content: space-between; gap: 2rem;">
                    <div style="flex: 1;">
                        <?php
                        $prev_post = get_previous_post();
                        if ($prev_post) :
                        ?>
                            <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="blog-read-more">
                                ← <?php echo esc_html($prev_post->post_title); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div style="flex: 1; text-align: right;">
                        <?php
                        $next_post = get_next_post();
                        if ($next_post) :
                        ?>
                            <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="blog-read-more">
                                <?php echo esc_html($next_post->post_title); ?> →
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </main>
    </article>

<?php endwhile; ?>

<?php
get_footer();
