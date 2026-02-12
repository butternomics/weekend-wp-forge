<?php
/**
 * The template for displaying all pages
 *
 * @package 404DayWeekend
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
            <div class="container container-narrow">
                <h1 class="page-header-title"><?php the_title(); ?></h1>
            </div>
        </div>

        <main class="section">
            <div class="container container-narrow">
                <div class="entry-content" style="font-size: 1.125rem; line-height: 1.8;">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', '404-day-weekend'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>

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
