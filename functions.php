<?php
/**
 * 404 Day Weekend Theme Functions
 *
 * @package 404DayWeekend
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function four04_day_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Set post thumbnail size
    set_post_thumbnail_size(1200, 800, true);

    // Add additional image sizes
    add_image_size('event-flyer', 800, 1200, true);
    add_image_size('hero-background', 1920, 1080, true);

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', '404-day-weekend'),
        'footer' => __('Footer Menu', '404-day-weekend'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'four04_day_theme_setup');

/**
 * Enqueue scripts and styles
 */
function four04_day_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('four04-day-style', get_stylesheet_uri(), array(), '1.0.0');

    // Enqueue navigation script for mobile menu
    wp_enqueue_script('four04-day-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true);

    // Enqueue comment reply script if needed
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'four04_day_enqueue_scripts');

/**
 * Add favicon to the site
 */
function four04_day_add_favicon() {
    $favicon_ico = get_template_directory_uri() . '/assets/images/favicon.ico';
    $favicon_png = get_template_directory_uri() . '/assets/images/favicon.png';

    echo '<link rel="icon" type="image/x-icon" href="' . esc_url($favicon_ico) . '">' . "\n";
    echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url($favicon_png) . '">' . "\n";
    echo '<link rel="apple-touch-icon" sizes="192x192" href="' . esc_url($favicon_png) . '">' . "\n";
}
add_action('wp_head', 'four04_day_add_favicon');

/**
 * Register Custom Post Type: Events
 */
function four04_day_register_event_post_type() {
    $labels = array(
        'name'                  => _x('Events', 'Post type general name', '404-day-weekend'),
        'singular_name'         => _x('Event', 'Post type singular name', '404-day-weekend'),
        'menu_name'             => _x('Events', 'Admin Menu text', '404-day-weekend'),
        'name_admin_bar'        => _x('Event', 'Add New on Toolbar', '404-day-weekend'),
        'add_new'               => __('Add New', '404-day-weekend'),
        'add_new_item'          => __('Add New Event', '404-day-weekend'),
        'new_item'              => __('New Event', '404-day-weekend'),
        'edit_item'             => __('Edit Event', '404-day-weekend'),
        'view_item'             => __('View Event', '404-day-weekend'),
        'all_items'             => __('All Events', '404-day-weekend'),
        'search_items'          => __('Search Events', '404-day-weekend'),
        'parent_item_colon'     => __('Parent Events:', '404-day-weekend'),
        'not_found'             => __('No events found.', '404-day-weekend'),
        'not_found_in_trash'    => __('No events found in Trash.', '404-day-weekend'),
        'featured_image'        => _x('Event Flyer Image', 'Overrides the "Featured Image" phrase', '404-day-weekend'),
        'set_featured_image'    => _x('Set flyer image', 'Overrides the "Set featured image" phrase', '404-day-weekend'),
        'remove_featured_image' => _x('Remove flyer image', 'Overrides the "Remove featured image" phrase', '404-day-weekend'),
        'use_featured_image'    => _x('Use as flyer image', 'Overrides the "Use as featured image" phrase', '404-day-weekend'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'event'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('event', $args);
}
add_action('init', 'four04_day_register_event_post_type');

/**
 * Register Custom Post Type: Partner Events
 */
function four04_day_register_partner_event_post_type() {
    $labels = array(
        'name'                  => _x('Partner Events', 'Post type general name', '404-day-weekend'),
        'singular_name'         => _x('Partner Event', 'Post type singular name', '404-day-weekend'),
        'menu_name'             => _x('Partner Events', 'Admin Menu text', '404-day-weekend'),
        'add_new_item'          => __('Add New Partner Event', '404-day-weekend'),
        'edit_item'             => __('Edit Partner Event', '404-day-weekend'),
        'view_item'             => __('View Partner Event', '404-day-weekend'),
        'all_items'             => __('All Partner Events', '404-day-weekend'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'partner-event'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array('title'),
        'show_in_rest'       => true,
    );

    register_post_type('partner_event', $args);
}
add_action('init', 'four04_day_register_partner_event_post_type');

/**
 * Add Meta Boxes for Events
 */
function four04_day_add_event_meta_boxes() {
    add_meta_box(
        'event_details',
        __('Event Details', '404-day-weekend'),
        'four04_day_event_details_callback',
        'event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'four04_day_add_event_meta_boxes');

/**
 * Event Details Meta Box Callback
 */
function four04_day_event_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('four04_day_save_event_details', 'four04_day_event_details_nonce');

    // Retrieve existing values
    $event_time = get_post_meta($post->ID, '_event_time', true);
    $event_location = get_post_meta($post->ID, '_event_location', true);
    $event_description = get_post_meta($post->ID, '_event_description', true);
    $event_button_text = get_post_meta($post->ID, '_event_button_text', true);
    $event_button_link = get_post_meta($post->ID, '_event_button_link', true);
    $event_flyer_alt = get_post_meta($post->ID, '_event_flyer_alt', true);
    $event_order = get_post_meta($post->ID, '_event_order', true);

    ?>
    <div style="padding: 10px 0;">
        <p style="margin-bottom: 20px; padding: 10px; background: #f0f8ff; border-left: 4px solid #0073aa;">
            <strong>Note:</strong> Use the Featured Image (below) to upload the event flyer. Then fill in the details here.
        </p>

        <p>
            <label for="event_time" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Event Date & Time', '404-day-weekend'); ?>
            </label>
            <input type="text" id="event_time" name="event_time" value="<?php echo esc_attr($event_time); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="e.g., Saturday, April 4 • 12:00 PM – 6:00 PM" />
            <span style="display: block; margin-top: 5px; color: #666; font-size: 13px;">
                Example format: "Thursday, April 2 • 6:00 PM – 10:00 PM"
            </span>
        </p>

        <p>
            <label for="event_location" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Location', '404-day-weekend'); ?>
            </label>
            <input type="text" id="event_location" name="event_location" value="<?php echo esc_attr($event_location); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="e.g., Underground Atlanta" />
        </p>

        <p>
            <label for="event_description" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Short Description', '404-day-weekend'); ?>
            </label>
            <textarea id="event_description" name="event_description" rows="3"
                      style="width: 100%; padding: 8px;"
                      placeholder="A brief description of the event (1-2 sentences)"><?php echo esc_textarea($event_description); ?></textarea>
        </p>

        <p>
            <label for="event_button_text" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Button Text', '404-day-weekend'); ?>
            </label>
            <input type="text" id="event_button_text" name="event_button_text" value="<?php echo esc_attr($event_button_text); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="e.g., BUY TICKETS! or GET FREE TICKET!" />
            <span style="display: block; margin-top: 5px; color: #666; font-size: 13px;">
                Leave blank to hide the button. Use "COMING SOON" for events without tickets yet.
            </span>
        </p>

        <p>
            <label for="event_button_link" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Button Link (URL)', '404-day-weekend'); ?>
            </label>
            <input type="url" id="event_button_link" name="event_button_link" value="<?php echo esc_url($event_button_link); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="https://example.com/tickets" />
            <span style="display: block; margin-top: 5px; color: #666; font-size: 13px;">
                Leave blank if button should be disabled (like "COMING SOON")
            </span>
        </p>

        <p>
            <label for="event_flyer_alt" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Flyer Image Alt Text (SEO)', '404-day-weekend'); ?>
            </label>
            <input type="text" id="event_flyer_alt" name="event_flyer_alt" value="<?php echo esc_attr($event_flyer_alt); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="e.g., 404 Day Block Party event flyer showing date and location" />
            <span style="display: block; margin-top: 5px; color: #666; font-size: 13px;">
                Describe the flyer image for accessibility and SEO (important!)
            </span>
        </p>

        <p>
            <label for="event_order" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Display Order', '404-day-weekend'); ?>
            </label>
            <input type="number" id="event_order" name="event_order" value="<?php echo esc_attr($event_order); ?>"
                   style="width: 150px; padding: 8px;"
                   placeholder="0" min="0" />
            <span style="display: block; margin-top: 5px; color: #666; font-size: 13px;">
                Events are displayed in ascending order (0 first, then 1, 2, etc.). Use this to control the order events appear.
            </span>
        </p>
    </div>
    <?php
}

/**
 * Save Event Meta Box Data
 */
function four04_day_save_event_details($post_id) {
    // Check nonce
    if (!isset($_POST['four04_day_event_details_nonce']) ||
        !wp_verify_nonce($_POST['four04_day_event_details_nonce'], 'four04_day_save_event_details')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    $fields = array(
        'event_time',
        'event_location',
        'event_description',
        'event_button_text',
        'event_button_link',
        'event_flyer_alt',
        'event_order',
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            if ($field === 'event_button_link') {
                update_post_meta($post_id, '_' . $field, esc_url_raw($_POST[$field]));
            } elseif ($field === 'event_order') {
                update_post_meta($post_id, '_' . $field, absint($_POST[$field]));
            } else {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post_event', 'four04_day_save_event_details');

/**
 * Add Meta Boxes for Partner Events
 */
function four04_day_add_partner_event_meta_boxes() {
    add_meta_box(
        'partner_event_details',
        __('Partner Event Details', '404-day-weekend'),
        'four04_day_partner_event_details_callback',
        'partner_event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'four04_day_add_partner_event_meta_boxes');

/**
 * Partner Event Details Meta Box Callback
 */
function four04_day_partner_event_details_callback($post) {
    wp_nonce_field('four04_day_save_partner_event_details', 'four04_day_partner_event_details_nonce');

    $partner_event_date = get_post_meta($post->ID, '_partner_event_date', true);
    $partner_event_link = get_post_meta($post->ID, '_partner_event_link', true);

    ?>
    <div style="padding: 10px 0;">
        <p>
            <label for="partner_event_date" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Event Date', '404-day-weekend'); ?>
            </label>
            <input type="text" id="partner_event_date" name="partner_event_date"
                   value="<?php echo esc_attr($partner_event_date); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="e.g., April 3, 2026" />
        </p>

        <p>
            <label for="partner_event_link" style="display: block; margin-bottom: 5px; font-weight: 600;">
                <?php _e('Event Link (URL)', '404-day-weekend'); ?>
            </label>
            <input type="url" id="partner_event_link" name="partner_event_link"
                   value="<?php echo esc_url($partner_event_link); ?>"
                   style="width: 100%; padding: 8px;"
                   placeholder="https://example.com/event" />
        </p>
    </div>
    <?php
}

/**
 * Save Partner Event Meta Box Data
 */
function four04_day_save_partner_event_details($post_id) {
    if (!isset($_POST['four04_day_partner_event_details_nonce']) ||
        !wp_verify_nonce($_POST['four04_day_partner_event_details_nonce'], 'four04_day_save_partner_event_details')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['partner_event_date'])) {
        update_post_meta($post_id, '_partner_event_date', sanitize_text_field($_POST['partner_event_date']));
    }

    if (isset($_POST['partner_event_link'])) {
        update_post_meta($post_id, '_partner_event_link', esc_url_raw($_POST['partner_event_link']));
    }
}
add_action('save_post_partner_event', 'four04_day_save_partner_event_details');

/**
 * Get all events ordered by custom order field
 */
function four04_day_get_events() {
    $args = array(
        'post_type' => 'event',
        'posts_per_page' => -1,
        'meta_key' => '_event_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
    );

    return new WP_Query($args);
}

/**
 * Get all partner events
 */
function four04_day_get_partner_events() {
    $args = array(
        'post_type' => 'partner_event',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
    );

    return new WP_Query($args);
}

/**
 * Register External Link post meta for Gutenberg compatibility
 */
function four04_day_register_external_link_meta() {
    register_post_meta('post', '_external_link', array(
        'type' => 'string',
        'single' => true,
        'show_in_rest' => true,
        'sanitize_callback' => 'esc_url_raw',
        'auth_callback' => function() {
            return current_user_can('edit_posts');
        }
    ));
}
add_action('init', 'four04_day_register_external_link_meta');

/**
 * Add Meta Box for External Link on Blog Posts
 */
function four04_day_add_external_link_meta_box() {
    add_meta_box(
        'post_external_link',
        __('External Link', '404-day-weekend'),
        'four04_day_external_link_callback',
        'post',
        'side',
        'high',
        array(
            '__back_compat_meta_box' => false,
        )
    );
}
add_action('add_meta_boxes', 'four04_day_add_external_link_meta_box');

/**
 * External Link Meta Box Callback
 */
function four04_day_external_link_callback($post) {
    wp_nonce_field('four04_day_save_external_link', 'four04_day_external_link_nonce');

    $external_link = get_post_meta($post->ID, '_external_link', true);

    ?>
    <p style="margin: 0 0 10px 0; font-size: 12px; color: #666;">
        For news/press posts that link to external articles. Leave blank for normal blog posts.
    </p>

    <p>
        <label for="external_link" style="display: block; margin-bottom: 5px; font-weight: 600; font-size: 13px;">
            <?php _e('External Article URL', '404-day-weekend'); ?>
        </label>
        <input type="url" id="external_link" name="external_link"
               value="<?php echo esc_url($external_link); ?>"
               style="width: 100%; padding: 6px;"
               placeholder="https://example.com/article" />
    </p>

    <p style="margin: 10px 0 0 0; font-size: 12px; color: #666;">
        When set, clicking this post will open this URL instead.
    </p>
    <?php
}

/**
 * Save External Link Meta Data
 */
function four04_day_save_external_link($post_id) {
    if (!isset($_POST['four04_day_external_link_nonce']) ||
        !wp_verify_nonce($_POST['four04_day_external_link_nonce'], 'four04_day_save_external_link')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['external_link'])) {
        update_post_meta($post_id, '_external_link', esc_url_raw($_POST['external_link']));
    }
}
add_action('save_post', 'four04_day_save_external_link');

/**
 * Get the link for a post (external link if set, otherwise permalink)
 */
function four04_day_get_post_link($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $external_link = get_post_meta($post_id, '_external_link', true);

    if ($external_link) {
        return $external_link;
    }

    return get_permalink($post_id);
}

/**
 * Check if post has external link
 */
function four04_day_has_external_link($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $external_link = get_post_meta($post_id, '_external_link', true);
    return !empty($external_link);
}

/**
 * Excerpt length
 */
function four04_day_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'four04_day_excerpt_length');

/**
 * Excerpt more
 */
function four04_day_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'four04_day_excerpt_more');

/**
 * Helper function to render FAQ items
 */
if (!function_exists('four04_day_render_faq_item')) {
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
}

/**
 * Create Parade FAQ page programmatically
 */
function four04_day_create_parade_faq_page() {
    // Check if page already exists
    $faq_page = get_page_by_path('parade-faq');

    if (!$faq_page) {
        // Create the page
        $page_data = array(
            'post_title'    => 'Parade FAQ',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_name'     => 'parade-faq',
            'page_template' => 'page-parade-faq.php'
        );

        $page_id = wp_insert_post($page_data);

        // Set the page template
        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'page-parade-faq.php');
        }
    }
}
add_action('after_setup_theme', 'four04_day_create_parade_faq_page');

/**
 * Add target="_blank" to sponsor menu items
 */
function four04_day_sponsor_link_attributes($atts, $item, $args) {
    // Check if this menu item has the 'menu-item-sponsor' class
    if (in_array('menu-item-sponsor', $item->classes)) {
        $atts['target'] = '_blank';
        $atts['rel'] = 'noopener noreferrer';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'four04_day_sponsor_link_attributes', 10, 3);

/**
 * Disable comments completely
 */
function four04_day_disable_comments() {
    // Close comments on the front-end
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);

    // Hide existing comments
    add_filter('comments_array', '__return_empty_array', 10, 2);

    // Remove comments page in menu
    add_action('admin_menu', function() {
        remove_menu_page('edit-comments.php');
    });

    // Remove comments links from admin bar
    add_action('init', function() {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }
    });

    // Remove comments metabox from dashboard
    add_action('admin_init', function() {
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    });

    // Disable support for comments and trackbacks in post types
    add_action('admin_init', function() {
        $post_types = get_post_types();
        foreach ($post_types as $post_type) {
            if (post_type_supports($post_type, 'comments')) {
                remove_post_type_support($post_type, 'comments');
                remove_post_type_support($post_type, 'trackbacks');
            }
        }
    });
}
add_action('after_setup_theme', 'four04_day_disable_comments');
