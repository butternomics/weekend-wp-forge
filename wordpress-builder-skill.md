---
name: wordpress-builder
description: Transform designs, mockups, or HTML/CSS into fully functioning WordPress themes. Handles theme generation, file organization, custom post types, and deployment. Use when building a new WordPress site or extending an existing theme.
disable-model-invocation: true
user-invocable: true
---

# WordPress Builder Skill

Transform any design, mockup, or HTML/CSS prototype into a production-ready WordPress theme with custom post types, responsive design, and deployment-ready code.

## When to Use This Skill

Use this skill when:
- Converting a design (Figma, Photoshop, image mockup) to WordPress
- Transforming HTML/CSS prototype to WordPress theme
- Building a new WordPress theme from scratch
- Extending an existing WordPress theme with new features
- Setting up custom post types and meta boxes
- Creating a responsive WordPress site with modern best practices

## Skill Arguments

**Basic invocation:**
```
/wordpress-builder [theme-name]
```

**With options (parse from user input):**
- Design file provided → Build from design
- HTML directory provided → Convert HTML prototype
- "extend" or "add to existing" → Add features to current theme

## Workflow Overview

This skill uses a systematic 8-phase workflow with todo tracking:

1. **Discovery & Input Analysis** - Understand requirements
2. **Planning & Architecture** - Design theme structure
3. **Theme Foundation** - Create core WordPress files
4. **Template Development** - Build WordPress templates
5. **Custom Functionality** - Add CPTs, meta boxes, helpers
6. **Styling & Responsiveness** - Implement responsive CSS/JS
7. **Testing & Validation** - Quality checks
8. **Deployment Preparation** - Git, docs, deployment

---

# Phase 1: Discovery & Input Analysis

## Create Todo List

**REQUIRED**: Start by creating a todo list with all 8 phases:

```
- [ ] Discovery & Input Analysis
- [ ] Planning & Architecture
- [ ] Theme Foundation
- [ ] Template Development
- [ ] Custom Functionality
- [ ] Styling & Responsiveness
- [ ] Testing & Validation
- [ ] Deployment Preparation
```

Mark the first task as `in_progress`.

## 1.1 Check Current Directory

Use Glob to check for existing WordPress files:
```
pattern: "*.php"
pattern: "style.css"
pattern: "functions.php"
```

Determine:
- **Greenfield** (new theme) - No WordPress files found
- **Brownfield** (existing theme) - WordPress files exist

## 1.2 Analyze Input Source

Identify what the user provided:

**Design File (PNG, JPG, PDF, Figma):**
- Use Read tool to view the design
- Extract visual elements, color palette, layout
- Map components to WordPress templates

**HTML/CSS Prototype:**
- Use Read to examine HTML structure
- Identify reusable patterns and components
- Note JavaScript functionality to preserve

**Requirements/Description Only:**
- Document what the user described
- Ask clarifying questions if needed

## 1.3 Ask Clarifying Questions (If Needed)

Use AskUserQuestion if any of these are unclear:
- Site purpose and target audience?
- Required custom post types (events, portfolio, products, etc.)?
- Special functionality needed (forms, galleries, sliders)?
- Deployment target (local dev, staging URL, production URL)?
- Preferred color scheme (if no design provided)?

## 1.4 Document Project Scope

Create a brief summary of:
- Theme name
- Input source (design/HTML/requirements)
- Key features needed
- Custom post types required
- Page templates needed
- Special functionality

**Output:** Clear understanding of project scope.

---

# Phase 2: Planning & Architecture

Mark Phase 1 complete and Phase 2 in_progress in todo list.

## 2.1 Design Theme File Structure

Plan the theme structure based on requirements:

**Minimum structure (simple theme):**
```
theme-name/
├── style.css                # Theme header + CSS
├── functions.php            # Theme setup
├── header.php               # Header template
├── footer.php               # Footer template
├── index.php                # Fallback
├── front-page.php           # Homepage
├── page.php                 # Default page
├── single.php               # Blog post
├── 404.php                  # Error page
└── assets/
    ├── css/
    └── js/
```

**Extended structure (with custom features):**
```
theme-name/
├── [all above files]
├── page-*.php               # Custom page templates
├── single-*.php             # Custom post type singles
├── archive-*.php            # Custom post type archives
└── template-parts/
    └── section-*.php        # Reusable sections
```

## 2.2 Identify Custom Post Types

Based on user requirements, plan custom post types:

**Common patterns:**
- Events → `post_type: 'event'`, meta: date, time, location
- Portfolio → `post_type: 'portfolio'`, meta: client, URL, technologies
- Team → `post_type: 'team'`, meta: position, bio, social links
- Testimonials → `post_type: 'testimonial'`, meta: author, company, rating

For each CPT, plan:
- Post type slug
- Labels (singular, plural)
- Supports (title, editor, thumbnail, etc.)
- Meta fields needed

## 2.3 Plan Meta Boxes

For each custom field needed, plan:
- Field name and label
- Field type (text, textarea, url, date, checkbox)
- Validation/sanitization method
- Where it displays (which post type)

## 2.4 Map Design to Templates

Identify which pages need custom templates:
- Homepage → `front-page.php`
- About page → `page.php` or `page-about.php`
- Contact → `page-contact.php` (if special form)
- Events listing → `page-events.php` or `archive-event.php`
- Single event → `single-event.php`

## 2.5 Plan CSS Architecture

Define:
- CSS variables for design system (colors, spacing, fonts)
- Breakpoints (mobile: 320px+, tablet: 768px+, desktop: 1024px+)
- Component list (header, nav, hero, cards, footer, forms, buttons)

**Output:** Detailed implementation plan with file list.

---

# Phase 3: Theme Foundation

Mark Phase 2 complete and Phase 3 in_progress.

## 3.1 Create style.css

Create with proper WordPress theme header:

```css
/*
Theme Name: [Theme Name]
Theme URI: https://example.com/[theme-slug]
Author: [Author Name]
Author URI: https://example.com
Description: [Brief description of the theme]
Version: 1.0.0
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: [theme-slug]
Tags: custom-menu, featured-images, responsive-design, accessibility-ready
*/

/* CSS Variables - Design System */
:root {
    /* Colors */
    --color-primary: #1B3B36;
    --color-secondary: #D4B982;
    --color-accent: #FF6B6B;
    --color-text: #333333;
    --color-background: #FFFFFF;
    --color-gray-light: #F5F5F5;
    --color-gray-medium: #CCCCCC;
    --color-gray-dark: #666666;

    /* Typography */
    --font-sans: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    --font-serif: Georgia, "Times New Roman", Times, serif;
    --font-mono: "Courier New", Courier, monospace;

    /* Spacing */
    --spacing-xs: 0.5rem;
    --spacing-sm: 1rem;
    --spacing-md: 1.5rem;
    --spacing-lg: 2rem;
    --spacing-xl: 3rem;
    --spacing-xxl: 4rem;

    /* Layout */
    --max-width: 1200px;
    --border-radius: 4px;
    --transition: 0.3s ease;
}

/* Reset and Base Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: var(--font-sans);
    font-size: 16px;
    line-height: 1.6;
    color: var(--color-text);
    background-color: var(--color-background);
}

/* Add more base styles as needed */
```

## 3.2 Create functions.php

Use the template from `templates/functions-template.php` as reference.

**Required sections:**
1. Security check (ABSPATH)
2. Theme setup function with:
   - add_theme_support('title-tag')
   - add_theme_support('post-thumbnails')
   - add_theme_support('html5', [...])
   - register_nav_menus()
3. Enqueue scripts and styles function
4. Placeholder for custom post types
5. Placeholder for meta boxes

**Example:**
```php
<?php
/**
 * Theme Functions
 *
 * @package ThemeName
 */

// Security: Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function themename_setup() {
    // Enable features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'themename_setup');

/**
 * Enqueue Scripts and Styles
 */
function themename_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'themename-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Navigation script
    wp_enqueue_script(
        'themename-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'themename_enqueue_scripts');
```

## 3.3 Create header.php

**Required elements:**
- DOCTYPE and HTML opening
- wp_head() hook
- Accessible navigation with skip link
- Mobile menu toggle button
- Logo/branding area

**Example:**
```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'textdomain'); ?></a>

<header id="masthead" class="site-header">
    <div class="header-container">
        <div class="site-branding">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            <?php endif; ?>
        </div>

        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e('Primary Menu', 'textdomain'); ?>">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="menu-toggle-icon"></span>
                <span class="screen-reader-text"><?php esc_html_e('Menu', 'textdomain'); ?></span>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => 'ul',
                'menu_class'     => 'primary-menu',
            ));
            ?>
        </nav>
    </div>
</header>

<main id="primary" class="site-main">
```

## 3.4 Create footer.php

**Required elements:**
- Footer content area
- wp_footer() hook
- Closing body and html tags

**Example:**
```php
</main><!-- #primary -->

<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'textdomain'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
```

## 3.5 Create index.php

Basic fallback template with WordPress Loop:

```php
<?php get_header(); ?>

<div class="content-area">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No content found.', 'textdomain'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
```

## 3.6 Create assets/ directory structure

```bash
mkdir -p assets/js assets/css assets/images
```

**Output:** Working WordPress theme foundation that activates without errors.

---

# Phase 4: Template Development

Mark Phase 3 complete and Phase 4 in_progress.

## 4.1 Create front-page.php (Homepage)

Based on the design/requirements, create homepage template:

```php
<?php get_header(); ?>

<div class="homepage">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1><?php the_title(); ?></h1>
                <div class="hero-text">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <!-- Additional sections as needed -->

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
```

## 4.2 Create page.php (Default Page Template)

Standard page template:

```php
<?php get_header(); ?>

<div class="page-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <div class="page-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
```

## 4.3 Create single.php (Blog Post Template)

```php
<?php get_header(); ?>

<div class="single-post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                    <span class="byline"><?php esc_html_e('by', 'textdomain'); ?> <?php the_author(); ?></span>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
```

## 4.4 Create 404.php (Error Page)

```php
<?php get_header(); ?>

<div class="error-404">
    <div class="error-content">
        <h1><?php esc_html_e('404 - Page Not Found', 'textdomain'); ?></h1>
        <p><?php esc_html_e('Sorry, the page you are looking for does not exist.', 'textdomain'); ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="button">
            <?php esc_html_e('Return to Homepage', 'textdomain'); ?>
        </a>
    </div>
</div>

<?php get_footer(); ?>
```

## 4.5 Create Custom Page Templates

For each unique page layout identified in planning:

**Example: page-contact.php**
```php
<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 */

get_header();
?>

<div class="contact-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="contact-content">
            <?php the_content(); ?>
        </div>

        <!-- Add contact form, map, etc. -->

    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
```

## 4.6 Create Template Parts

For reusable sections, create template-parts/:

**Example: template-parts/section-hero.php**
```php
<section class="hero-section">
    <div class="hero-inner">
        <h2><?php echo esc_html(get_theme_mod('hero_title', 'Welcome')); ?></h2>
        <p><?php echo esc_html(get_theme_mod('hero_subtitle', 'Subtitle here')); ?></p>
    </div>
</section>
```

Use with: `<?php get_template_part('template-parts/section', 'hero'); ?>`

**Output:** Complete template hierarchy for all pages.

---

# Phase 5: Custom Functionality

Mark Phase 4 complete and Phase 5 in_progress.

## 5.1 Register Custom Post Types

For each CPT identified in planning, add to functions.php:

**Reference:** `templates/custom-post-type-template.php`

**Example: Events CPT**
```php
/**
 * Register Events Custom Post Type
 */
function themename_register_event_cpt() {
    $labels = array(
        'name'               => _x('Events', 'post type general name', 'textdomain'),
        'singular_name'      => _x('Event', 'post type singular name', 'textdomain'),
        'menu_name'          => _x('Events', 'admin menu', 'textdomain'),
        'add_new'            => __('Add New', 'textdomain'),
        'add_new_item'       => __('Add New Event', 'textdomain'),
        'edit_item'          => __('Edit Event', 'textdomain'),
        'view_item'          => __('View Event', 'textdomain'),
        'all_items'          => __('All Events', 'textdomain'),
        'search_items'       => __('Search Events', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'events'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-calendar',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );

    register_post_type('event', $args);
}
add_action('init', 'themename_register_event_cpt');
```

## 5.2 Add Meta Boxes

For each custom field needed:

**Example: Event Details Meta Box**
```php
/**
 * Add Event Meta Boxes
 */
function themename_add_event_meta_boxes() {
    add_meta_box(
        'event_details',
        __('Event Details', 'textdomain'),
        'themename_event_details_callback',
        'event',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'themename_add_event_meta_boxes');

/**
 * Event Details Meta Box Callback
 */
function themename_event_details_callback($post) {
    // Add nonce for security
    wp_nonce_field('event_details_nonce', 'event_details_nonce_field');

    // Get existing values
    $event_date = get_post_meta($post->ID, '_event_date', true);
    $event_time = get_post_meta($post->ID, '_event_time', true);
    $event_location = get_post_meta($post->ID, '_event_location', true);
    ?>

    <div class="event-meta-box">
        <p>
            <label for="event_date"><strong><?php esc_html_e('Event Date', 'textdomain'); ?></strong></label><br>
            <input type="date" id="event_date" name="event_date" value="<?php echo esc_attr($event_date); ?>" style="width: 100%;">
        </p>

        <p>
            <label for="event_time"><strong><?php esc_html_e('Event Time', 'textdomain'); ?></strong></label><br>
            <input type="time" id="event_time" name="event_time" value="<?php echo esc_attr($event_time); ?>" style="width: 100%;">
        </p>

        <p>
            <label for="event_location"><strong><?php esc_html_e('Location', 'textdomain'); ?></strong></label><br>
            <input type="text" id="event_location" name="event_location" value="<?php echo esc_attr($event_location); ?>" placeholder="<?php esc_attr_e('Enter location', 'textdomain'); ?>" style="width: 100%;">
        </p>
    </div>

    <?php
}

/**
 * Save Event Details
 */
function themename_save_event_details($post_id) {
    // Security checks
    if (!isset($_POST['event_details_nonce_field'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['event_details_nonce_field'], 'event_details_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    if (isset($_POST['event_date'])) {
        update_post_meta($post_id, '_event_date', sanitize_text_field($_POST['event_date']));
    }

    if (isset($_POST['event_time'])) {
        update_post_meta($post_id, '_event_time', sanitize_text_field($_POST['event_time']));
    }

    if (isset($_POST['event_location'])) {
        update_post_meta($post_id, '_event_location', sanitize_text_field($_POST['event_location']));
    }
}
add_action('save_post_event', 'themename_save_event_details');
```

## 5.3 Create Helper Functions

Add query and display helper functions:

```php
/**
 * Get upcoming events
 */
function themename_get_upcoming_events($limit = 10) {
    $today = date('Y-m-d');

    $args = array(
        'post_type'      => 'event',
        'posts_per_page' => $limit,
        'meta_key'       => '_event_date',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query'     => array(
            array(
                'key'     => '_event_date',
                'value'   => $today,
                'compare' => '>=',
                'type'    => 'DATE',
            ),
        ),
    );

    return new WP_Query($args);
}

/**
 * Display event date and time
 */
function themename_display_event_datetime($post_id) {
    $date = get_post_meta($post_id, '_event_date', true);
    $time = get_post_meta($post_id, '_event_time', true);

    if ($date) {
        echo '<span class="event-date">' . esc_html(date('F j, Y', strtotime($date))) . '</span>';
    }

    if ($time) {
        echo '<span class="event-time">' . esc_html(date('g:i A', strtotime($time))) . '</span>';
    }
}
```

## 5.4 Create Custom Post Type Templates

**single-event.php:**
```php
<?php get_header(); ?>

<div class="single-event-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="event-header">
                <h1><?php the_title(); ?></h1>
                <div class="event-meta">
                    <?php themename_display_event_datetime(get_the_ID()); ?>
                    <?php
                    $location = get_post_meta(get_the_ID(), '_event_location', true);
                    if ($location) {
                        echo '<span class="event-location">' . esc_html($location) . '</span>';
                    }
                    ?>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="event-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="event-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
```

**Output:** Fully functional custom post types with meta boxes.

---

# Phase 6: Styling & Responsiveness

Mark Phase 5 complete and Phase 6 in_progress.

## 6.1 Complete CSS Design System

Add comprehensive styles to style.css:

### Layout Components

```css
/* Container */
.container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 var(--spacing-md);
}

/* Header */
.site-header {
    background-color: var(--color-primary);
    color: white;
    padding: var(--spacing-md) 0;
}

.header-container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 var(--spacing-md);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.site-branding a {
    color: white;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
}
```

### Navigation

```css
/* Main Navigation */
.main-navigation {
    position: relative;
}

.main-navigation ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: var(--spacing-md);
}

.main-navigation a {
    color: white;
    text-decoration: none;
    padding: var(--spacing-xs) var(--spacing-sm);
    display: block;
    transition: var(--transition);
}

.main-navigation a:hover,
.main-navigation a:focus {
    background-color: rgba(255, 255, 255, 0.1);
}

/* Mobile Menu Toggle */
.menu-toggle {
    display: none;
    background: transparent;
    border: 2px solid white;
    color: white;
    padding: var(--spacing-xs) var(--spacing-sm);
    cursor: pointer;
    font-size: 1rem;
}

.menu-toggle:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

/* Mobile Styles */
@media (max-width: 767px) {
    .menu-toggle {
        display: block;
    }

    .main-navigation ul {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: var(--color-primary);
        padding: var(--spacing-md);
        min-width: 200px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .main-navigation.toggled ul {
        display: flex;
    }
}
```

### Components

```css
/* Buttons */
.button,
button[type="submit"],
input[type="submit"] {
    display: inline-block;
    padding: var(--spacing-sm) var(--spacing-lg);
    background-color: var(--color-primary);
    color: white;
    border: none;
    border-radius: var(--border-radius);
    text-decoration: none;
    cursor: pointer;
    transition: var(--transition);
    font-size: 1rem;
}

.button:hover,
button[type="submit"]:hover {
    background-color: var(--color-secondary);
    transform: translateY(-2px);
}

/* Cards */
.card {
    background: white;
    border-radius: var(--border-radius);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: var(--spacing-md);
    margin-bottom: var(--spacing-md);
}

/* Forms */
input[type="text"],
input[type="email"],
input[type="url"],
input[type="tel"],
textarea,
select {
    width: 100%;
    padding: var(--spacing-sm);
    border: 1px solid var(--color-gray-medium);
    border-radius: var(--border-radius);
    font-size: 1rem;
    font-family: inherit;
}

input:focus,
textarea:focus,
select:focus {
    outline: none;
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px rgba(27, 59, 54, 0.1);
}
```

### Responsive Grid

```css
/* Grid System */
.grid {
    display: grid;
    gap: var(--spacing-md);
}

.grid-2 {
    grid-template-columns: 1fr;
}

.grid-3 {
    grid-template-columns: 1fr;
}

@media (min-width: 768px) {
    .grid-2 {
        grid-template-columns: repeat(2, 1fr);
    }

    .grid-3 {
        grid-template-columns: repeat(3, 1fr);
    }
}
```

### Footer

```css
.site-footer {
    background-color: var(--color-gray-dark);
    color: white;
    padding: var(--spacing-xl) 0 var(--spacing-md);
    margin-top: var(--spacing-xxl);
}

.footer-container {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 var(--spacing-md);
}
```

### Accessibility

```css
/* Screen Reader Text */
.screen-reader-text {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}

.screen-reader-text:focus {
    position: static;
    width: auto;
    height: auto;
    padding: var(--spacing-sm);
    margin: 0;
    overflow: visible;
    clip: auto;
    white-space: normal;
    background-color: var(--color-primary);
    color: white;
    text-decoration: none;
}

/* Skip Link */
.skip-link {
    background-color: var(--color-primary);
    color: white;
    padding: var(--spacing-sm);
    text-decoration: none;
}
```

## 6.2 Create navigation.js

Create assets/js/navigation.js for mobile menu:

```javascript
/**
 * Mobile Navigation Toggle
 */
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !expanded);
            navigation.classList.toggle('toggled');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (navigation && !navigation.contains(event.target) && !menuToggle.contains(event.target)) {
            navigation.classList.remove('toggled');
            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        }
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && navigation.classList.contains('toggled')) {
            navigation.classList.remove('toggled');
            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.focus();
            }
        }
    });
});
```

## 6.3 Add Responsive Breakpoints

Ensure all components work at these breakpoints:
- Mobile: 320px - 767px
- Tablet: 768px - 1023px
- Desktop: 1024px+

**Output:** Polished, responsive design with interactive features.

---

# Phase 7: Testing & Validation

Mark Phase 6 complete and Phase 7 in_progress.

## 7.1 WordPress Standards Checklist

Verify each item:

**Theme Requirements:**
- [ ] style.css has complete theme header with all required fields
- [ ] Theme activates without errors in WordPress admin
- [ ] All PHP files have ABSPATH security check at top
- [ ] Text domain is consistent throughout all files
- [ ] wp_head() is called in header.php before </head>
- [ ] wp_footer() is called in footer.php before </body>
- [ ] wp_body_open() is called after opening <body> tag

**Security:**
- [ ] All output uses escaping functions (esc_html, esc_url, esc_attr)
- [ ] All input uses sanitization (sanitize_text_field, etc.)
- [ ] All forms have nonce fields (wp_nonce_field)
- [ ] All form processing verifies nonces (wp_verify_nonce)
- [ ] No direct database queries (use WP_Query, get_posts, etc.)

**Template Hierarchy:**
- [ ] Templates follow WordPress naming conventions
- [ ] get_header() and get_footer() used instead of includes
- [ ] WordPress Loop used correctly in all templates
- [ ] Custom page templates have proper template name comment

**Functionality:**
- [ ] Navigation menus registered and working
- [ ] Custom post types registered correctly
- [ ] Meta boxes save and retrieve data properly
- [ ] Scripts and styles enqueued properly (not hardcoded)
- [ ] All images have alt attributes

## 7.2 Responsive Design Check

Test at different viewport sizes:

**Mobile (320px - 767px):**
- [ ] Menu toggle button appears and works
- [ ] Mobile menu opens/closes correctly
- [ ] Text is readable (not too small)
- [ ] Images scale properly
- [ ] No horizontal scrolling
- [ ] Touch targets are at least 44px

**Tablet (768px - 1023px):**
- [ ] Layout adjusts appropriately
- [ ] Navigation displays correctly
- [ ] Grid columns adjust (2 or 3 columns)
- [ ] Images maintain aspect ratio

**Desktop (1024px+):**
- [ ] Full navigation displays
- [ ] Content doesn't stretch too wide (max-width works)
- [ ] Grid layouts show full columns
- [ ] Hover states work on links/buttons

## 7.3 Code Quality Check

**PHP:**
- [ ] No PHP errors or warnings
- [ ] No deprecated functions used
- [ ] Code follows WordPress coding standards
- [ ] Functions are properly documented
- [ ] DRY principle followed (no code duplication)

**CSS:**
- [ ] Valid CSS (no syntax errors)
- [ ] CSS variables used consistently
- [ ] No !important overuse
- [ ] Vendor prefixes where needed

**JavaScript:**
- [ ] No console errors
- [ ] Event listeners properly attached
- [ ] No global variable pollution
- [ ] Accessibility keyboard support

## 7.4 Accessibility Check

- [ ] Skip to content link present and functional
- [ ] ARIA labels on navigation
- [ ] Semantic HTML5 elements used
- [ ] Sufficient color contrast (4.5:1 for text)
- [ ] Keyboard navigation works for all interactive elements
- [ ] Form fields have associated labels
- [ ] Images have alt text (or empty alt if decorative)

## 7.5 Performance Check

- [ ] Images optimized (not unnecessarily large)
- [ ] CSS/JS properly enqueued (in footer where appropriate)
- [ ] No inline styles or scripts (except necessary)
- [ ] Minimal HTTP requests
- [ ] WordPress's built-in jQuery used (not separate copy)

**Output:** Test report with verification that all checks pass.

---

# Phase 8: Deployment Preparation

Mark Phase 7 complete and Phase 8 in_progress.

## 8.1 Git Workflow

**Check git status:**
```bash
git status
```

**Create feature branch (if not already on one):**
```bash
git checkout -b claude/wordpress-theme-[theme-name]-[session-id]
```

**Stage all theme files:**
```bash
git add [theme-directory]/*
```

**Commit with descriptive message:**
```bash
git commit -m "Create WordPress theme: [Theme Name]

- Core templates (header, footer, page, single, 404)
- Custom post types: [list CPTs]
- Meta boxes for [describe fields]
- Responsive navigation with mobile support
- CSS design system with variables
- Accessibility features (skip link, ARIA labels)
- Security hardening (escaping, sanitization, nonces)

https://claude.ai/code/session_[SESSION_ID]"
```

## 8.2 Create README.md

Create comprehensive README in theme directory:

```markdown
# [Theme Name]

[Brief description of the theme]

## Features

- Responsive design (mobile, tablet, desktop)
- Custom post types: [list]
- Meta boxes for custom fields
- Accessible navigation
- Security-hardened code
- WordPress coding standards compliant

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Activate the theme in WordPress Admin → Appearance → Themes
3. Follow the setup instructions below

## Setup

### 1. Set Permalinks

Go to Settings → Permalinks and select "Post name" structure. Click Save.

### 2. Create Pages

Create the following pages in Pages → Add New:

- [List pages needed, e.g., "Home", "About", "Contact", "Events"]

### 3. Set Homepage

Go to Settings → Reading:
- Select "A static page"
- Choose your Home page as "Homepage"
- Click Save

### 4. Create Menu

Go to Appearance → Menus:
1. Click "Create a new menu"
2. Name it "Primary Menu"
3. Add your pages to the menu
4. Check "Primary Menu" under Menu Settings
5. Click Save Menu

### 5. Add Content

[Instructions for adding content to custom post types]

## Custom Post Types

### [CPT Name]

[Description of what this is for]

**Custom Fields:**
- [Field name]: [Description]
- [Field name]: [Description]

**How to use:**
1. Go to [CPT Menu] → Add New
2. Enter title and content
3. Fill in custom fields in the sidebar
4. Set featured image
5. Publish

## Customization

### Changing Colors

Edit CSS variables in `style.css`:

```css
:root {
    --color-primary: #YourColor;
    --color-secondary: #YourColor;
}
```

### Adding More Custom Fields

See `functions.php` meta box sections for examples.

### Creating Custom Page Templates

1. Duplicate `page.php`
2. Add template name comment at top:
   ```php
   <?php
   /**
    * Template Name: Your Template Name
    */
   ```
3. Customize the template layout

## File Structure

```
theme-name/
├── style.css                # Theme styles
├── functions.php            # Theme functionality
├── header.php               # Header template
├── footer.php               # Footer template
├── index.php                # Fallback template
├── front-page.php           # Homepage
├── page.php                 # Default page
├── single.php               # Blog post
├── 404.php                  # Error page
├── [custom templates]       # Custom page templates
└── assets/
    ├── js/                  # JavaScript files
    └── css/                 # Additional CSS
```

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher

## Support

[Add support information or link]

## License

This theme is licensed under GPL v2 or later.
```

## 8.3 Create User Guide (Optional)

For client-facing projects, create THEME-GUIDE.md:

```markdown
# [Theme Name] - User Guide

## Managing Content

### Adding a Blog Post

1. Go to Posts → Add New
2. Enter your title and content
3. Set a featured image (recommended)
4. Click Publish

### Adding a Page

1. Go to Pages → Add New
2. Enter your title and content
3. Choose a template (if needed) from Page Attributes
4. Click Publish

### [Managing Custom Post Type]

[Step-by-step instructions]

## Menus

### Editing the Navigation Menu

1. Go to Appearance → Menus
2. Select "Primary Menu"
3. Add, remove, or reorder items
4. Click Save Menu

## Troubleshooting

### Menu not appearing
- Make sure you've created and assigned a menu to "Primary Menu" location

### Custom post type not showing
- Go to Settings → Permalinks and click Save (this flushes rewrite rules)

### Images not displaying
- Check that images are uploaded and set as featured image
- Verify image file formats are supported (JPG, PNG, GIF)

## Need Help?

[Contact information or support link]
```

## 8.4 Deployment Instructions

Provide deployment instructions based on setup:

**If deploying via Git Pull:**
```bash
# On the server
ssh user@yourserver.com
cd /path/to/wp-content/themes/
git pull origin [branch-name]
```

**If deploying via Upload:**
1. Compress the theme folder to a .zip file
2. Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
3. Choose the .zip file and click Install
4. Click Activate

**If deploying via wget (from GitHub):**
```bash
cd /path/to/wp-content/themes/
wget https://github.com/user/repo/archive/main.zip
unzip main.zip
mv repo-main theme-name
```

## 8.5 Push to Git

Push the committed theme to the remote repository:

```bash
git push -u origin claude/wordpress-theme-[theme-name]-[session-id]
```

Retry up to 4 times with exponential backoff if network errors occur (2s, 4s, 8s, 16s).

**Output:** Production-ready theme package with complete documentation.

---

# Wrap-Up

Mark Phase 8 complete. All todos should now be completed.

## Provide Comprehensive Summary

Create a detailed summary for the user:

```markdown
# WordPress Theme: [Theme Name] - Complete! ✅

## Summary

Successfully created a fully functional WordPress theme with:
- [X] core template files
- [X] custom post types ([list])
- [X] meta boxes with custom fields
- Mobile-responsive design (320px - 1440px+)
- Security-hardened code (escaping, sanitization, nonces)
- Accessible navigation (ARIA labels, keyboard support)
- Comprehensive documentation

## Files Created

### Core Templates
- style.css ([X] lines - theme header + design system)
- functions.php ([X] lines - theme setup, CPTs, meta boxes)
- header.php (navigation + branding)
- footer.php (footer content + copyright)
- index.php (fallback template)

### Page Templates
- front-page.php (homepage with hero section)
- page.php (default page template)
- single.php (blog post template)
- 404.php (custom error page)
[List any custom page templates]

### Custom Post Type Templates
[List any CPT templates like single-event.php]

### Template Parts
[List template parts if created]

### Assets
- assets/js/navigation.js (mobile menu functionality)
[List any other assets]

## Custom Functionality

### Custom Post Types
1. **[CPT Name]** (`[slug]`)
   - Fields: [list meta fields]
   - Menu icon: [icon]
   - Features: [supports]

[Repeat for each CPT]

### Meta Boxes
- [Meta box name]: [fields included]
[Repeat for each meta box]

### Helper Functions
- `[function_name]()` - [description]
[List key helper functions]

## Testing Results

✅ WordPress standards compliance
✅ Theme activates without errors
✅ Navigation works (mobile + desktop)
✅ Custom post types registered correctly
✅ Meta boxes save/retrieve data properly
✅ Responsive design (mobile, tablet, desktop)
✅ No PHP errors or warnings
✅ No JavaScript console errors
✅ Security checks passed (escaping, sanitization, nonces)
✅ Accessibility features (skip link, ARIA labels, keyboard nav)
✅ Valid HTML5 and CSS

## Next Steps

### 1. WordPress Admin Setup

After activating the theme in WordPress Admin → Appearance → Themes:

**Set Permalinks:**
- Settings → Permalinks → "Post name" → Save Changes

**Create Pages:**
[List pages user should create]

**Set Homepage:**
- Settings → Reading → "A static page"
- Homepage: [page name]
- Save Changes

**Create Menu:**
- Appearance → Menus → Create new menu
- Add pages to menu
- Assign to "Primary Menu" location
- Save Menu

**Add Content:**
- [Instructions for adding content to custom post types]

### 2. Git Deployment

**Current Status:**
- Branch: claude/wordpress-theme-[name]-[session-id]
- Status: Committed and pushed ✅

**To deploy:**

```bash
# Option A: Merge to main (if approved)
git checkout main
git merge claude/wordpress-theme-[name]-[session-id]
git push origin main

# Option B: Create pull request for review
# [Provide PR instructions if applicable]
```

### 3. Server Deployment

**Method 1: Git Pull (recommended)**
```bash
ssh user@server
cd /path/to/wp-content/themes/
git pull origin main
```

**Method 2: Upload via WordPress Admin**
1. Compress theme folder to .zip
2. WordPress Admin → Appearance → Themes → Add New → Upload
3. Install and activate

### 4. Post-Deployment

After theme is live:
1. Test on actual server environment
2. Flush permalinks (Settings → Permalinks → Save)
3. Test all custom post types
4. Verify navigation menus
5. Check responsive design on real devices
6. Test forms (if any)

## Documentation

📄 **README.md** - Complete installation and setup guide
[If created: 📄 **THEME-GUIDE.md** - User guide for content management]

## Customization Quick Reference

### Change Colors
Edit CSS variables in `style.css`:
```css
:root {
    --color-primary: #YourColor;
    --color-secondary: #YourColor;
}
```

### Add New Page Template
1. Duplicate `page.php`
2. Add template header comment
3. Customize layout

### Add Custom Post Type
Reference existing CPT in `functions.php` and follow the pattern

### Add Meta Box
Reference existing meta boxes in `functions.php` for the pattern

## Theme Details

- **Version:** 1.0.0
- **WordPress:** Requires 6.0+
- **PHP:** Requires 7.4+
- **License:** GPL v2 or later
- **Text Domain:** [text-domain]

## Support & Maintenance

For common issues, see README.md "Setup" section or THEME-GUIDE.md "Troubleshooting."

---

🎉 **Your WordPress theme is ready for production!**

The theme follows WordPress coding standards, includes security best practices, and is fully responsive. Simply activate it in WordPress and follow the setup steps above.
```

---

# WordPress Patterns Library

## Security Patterns

### ABSPATH Check
```php
if (!defined('ABSPATH')) {
    exit;
}
```

### Escaping Output
```php
// Plain text
echo esc_html($text);

// URLs
echo esc_url($url);

// Attributes
echo esc_attr($attribute);

// HTML content (limited tags)
echo wp_kses_post($html_content);
```

### Sanitizing Input
```php
// Text field
$clean = sanitize_text_field($_POST['field']);

// Email
$email = sanitize_email($_POST['email']);

// URL
$url = esc_url_raw($_POST['url']);

// Integer
$number = absint($_POST['number']);

// HTML content
$content = wp_kses_post($_POST['content']);
```

### Nonce Verification
```php
// Add nonce field
wp_nonce_field('action_name', 'nonce_field_name');

// Verify nonce
if (!wp_verify_nonce($_POST['nonce_field_name'], 'action_name')) {
    return;
}
```

## Template Patterns

### Standard WordPress Loop
```php
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- Content here -->
    <?php endwhile; ?>
<?php else : ?>
    <p><?php esc_html_e('No content found.', 'textdomain'); ?></p>
<?php endif; ?>
```

### Custom WP_Query
```php
<?php
$args = array(
    'post_type' => 'custom_type',
    'posts_per_page' => 10,
);
$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        // Content
    endwhile;
endif;
wp_reset_postdata(); // Important!
?>
```

### Template Part
```php
<?php get_template_part('template-parts/section', 'hero'); ?>
```

## Function Patterns

### Theme Setup
```php
function themename_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'themename_setup');
```

### Enqueue Scripts/Styles
```php
function themename_enqueue_scripts() {
    wp_enqueue_style(
        'themename-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'themename-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'themename_enqueue_scripts');
```

---

# Reference Files

This skill includes supporting files:

- **templates/** - Boilerplate PHP templates for common patterns
- **reference/wordpress-best-practices.md** - WordPress coding standards and security
- **reference/theme-structure-guide.md** - File organization and template hierarchy
- **examples/404-day-weekend-patterns.md** - Real-world examples from production theme

Reference these files when needed by using the Read tool.

---

# Important Notes

1. **Always use TodoWrite** to track progress through all 8 phases
2. **Mark todos complete** immediately after finishing each phase
3. **Test thoroughly** before marking Phase 7 complete
4. **Provide comprehensive summary** at the end
5. **Follow WordPress coding standards** throughout
6. **Security first** - always escape output, sanitize input, verify nonces
7. **Mobile-first** - design for mobile, enhance for desktop
8. **Accessibility** - semantic HTML, ARIA labels, keyboard navigation

---

**This skill transforms designs into production-ready WordPress themes systematically and securely.** 🚀
