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
        <h1 class="page-header-title"><?php esc_html_e('404 News and Updates', '404-day-weekend'); ?></h1>
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
                        </div>

                        <?php
                        $post_link = four04_day_get_post_link();
                        $is_external = four04_day_has_external_link();
                        $link_attrs = $is_external ? ' target="_blank" rel="noopener noreferrer"' : '';
                        ?>

                        <h2 class="blog-title">
                            <a href="<?php echo esc_url($post_link); ?>"<?php echo $link_attrs; ?>><?php the_title(); ?></a>
                        </h2>

                        <a href="<?php echo esc_url($post_link); ?>" class="blog-read-more"<?php echo $link_attrs; ?>>
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
