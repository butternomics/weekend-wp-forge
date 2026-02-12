<?php
/**
 * The main template file for blog posts
 *
 * @package 404DayWeekend
 */

get_header();
?>

<div class="page-header">
    <div class="container container-narrow">
        <h1 class="page-header-title"><?php esc_html_e('Blog', '404-day-weekend'); ?></h1>
        <p class="page-header-subtitle"><?php esc_html_e('Stories, News & Updates', '404-day-weekend'); ?></p>
    </div>
</div>

<main class="section">
    <div class="container container-narrow">
        <?php if (have_posts()) : ?>
            <div class="blog-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
                        <div class="blog-meta">
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

                        <h2 class="blog-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="blog-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="blog-read-more">
                            <?php esc_html_e('Read More →', '404-day-weekend'); ?>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php
            // Pagination
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('← Previous', '404-day-weekend'),
                'next_text' => __('Next →', '404-day-weekend'),
            ));
            ?>

        <?php else : ?>
            <p><?php esc_html_e('No posts found.', '404-day-weekend'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
