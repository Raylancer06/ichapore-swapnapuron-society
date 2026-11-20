<?php
/**
 * Ichapore Swapnapuron Society Theme Functions and Definitions
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('SWAPNAPURON_VERSION', '1.0.1');
define('SWAPNAPURON_DIR', get_template_directory());
define('SWAPNAPURON_URI', get_template_directory_uri());

// Load Modular Files
require_once SWAPNAPURON_DIR . '/inc/theme-options.php';
require_once SWAPNAPURON_DIR . '/inc/custom-post-types.php';
require_once SWAPNAPURON_DIR . '/inc/meta-boxes.php';
require_once SWAPNAPURON_DIR . '/inc/template-tags.php';

/**
 * Theme Setup
 */
function swapnapuron_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 700, true);

    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Navigation Menu', 'ichapore-swapnapuron'),
        'footer'  => __('Footer Quick Links', 'ichapore-swapnapuron'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
}
add_action('after_setup_theme', 'swapnapuron_theme_setup');

/**
 * Enqueue Styles and Scripts
 */
function swapnapuron_enqueue_scripts() {
    // Google Montserrat Font
    wp_enqueue_style(
        'swapnapuron-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap',
        array(),
        null
    );

    // Google Material Symbols Outlined
    wp_enqueue_style(
        'swapnapuron-material-icons',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap',
        array(),
        null
    );

    // Bootstrap 5.3.3 CSS
    wp_enqueue_style(
        'bootstrap-5',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme Main Stylesheet
    wp_enqueue_style(
        'swapnapuron-theme-style',
        SWAPNAPURON_URI . '/assets/css/style.css',
        array('bootstrap-5'),
        SWAPNAPURON_VERSION
    );

    // Theme Root style.css
    wp_enqueue_style(
        'swapnapuron-root-style',
        get_stylesheet_uri(),
        array('swapnapuron-theme-style'),
        SWAPNAPURON_VERSION
    );

    // Bootstrap 5.3.3 JS Bundle
    wp_enqueue_script(
        'bootstrap-5-bundle',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'swapnapuron_enqueue_scripts');

/**
 * Custom Walker for Bootstrap 5 Dropdowns
 */
class Swapnapuron_BS5_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="dropdown-menu dropdown-menu-dark shadow-lg border-0 p-2">';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        if ($depth === 0) {
            $li_class = 'nav-item' . ($has_children ? ' dropdown' : '');
            $output .= '<li class="' . esc_attr($li_class) . '">';

            $link_class = 'nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3' . ($has_children ? ' dropdown-toggle' : '');
            if ($item->current) $link_class .= ' active';

            $attribs = ' class="' . esc_attr($link_class) . '" href="' . esc_url($item->url) . '"';
            if ($has_children) {
                $attribs .= ' role="button" data-bs-toggle="dropdown" aria-expanded="false"';
            }
            $output .= '<a' . $attribs . '>' . esc_html($item->title) . '</a>';
        } else {
            $output .= '<li>';
            $link_class = 'dropdown-item dropdown-item-editorial';
            if ($item->current) $link_class .= ' active';
            $output .= '<a class="' . esc_attr($link_class) . '" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= "</ul>\n";
    }
}

/**
 * Auto-provision all 16 website pages on theme switch or initial load
 */
function swapnapuron_auto_provision_pages() {
    $pages = array(
        'who-we-are'      => array('title' => 'Who We Are', 'template' => 'page-who-we-are.php'),
        'mission-vision'  => array('title' => 'Mission & Vision', 'template' => 'page-mission-vision.php'),
        'our-team'        => array('title' => 'Our Team', 'template' => 'page-our-team.php'),
        'why-trust-us'    => array('title' => 'Why Trust Us', 'template' => 'page-why-trust-us.php'),
        'swasthya-chakra' => array('title' => 'Swasthya Chakra', 'template' => 'page-swasthya-chakra.php'),
        'janmataru'       => array('title' => 'Janmataru', 'template' => 'page-janmataru.php'),
        'ayushman-bhava'  => array('title' => 'Ayushman Bhava', 'template' => 'page-ayushman-bhava.php'),
        'happy'           => array('title' => 'Smile with Santa', 'template' => 'page-happy.php'),
        'udaan'           => array('title' => 'Project Udaan', 'template' => 'page-udaan.php'),
        'anandadhara'     => array('title' => 'Anandadhara', 'template' => 'page-anandadhara.php'),
        'vidharthi'       => array('title' => 'Vidharthi', 'template' => 'page-vidharthi.php'),
        'ashiana'         => array('title' => 'Project Ashiana', 'template' => 'page-ashiana.php'),
        'volunteer'       => array('title' => 'Volunteer Registration', 'template' => 'page-volunteer.php'),
        'contact'         => array('title' => 'Contact Us', 'template' => 'page-contact.php'),
        'donate'          => array('title' => 'Donate Now', 'template' => 'page-donate.php'),
        'privacy-policy'  => array('title' => 'Privacy Policy', 'template' => 'page-privacy-policy.php'),
    );

    foreach ($pages as $slug => $data) {
        $page = get_page_by_path($slug);
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
            ));
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $data['template']);
            }
        } else {
            $cur = get_post_meta($page->ID, '_wp_page_template', true);
            if ($cur !== $data['template']) {
                update_post_meta($page->ID, '_wp_page_template', $data['template']);
            }
        }
    }
}
add_action('after_switch_theme', 'swapnapuron_auto_provision_pages');
add_action('init', 'swapnapuron_auto_provision_pages');

/**
 * Handle URL redirects from /project/slug/ or /projects/slug/ to /slug/
 */
function swapnapuron_project_rewrite_redirect() {
    if (is_admin() || wp_doing_ajax()) return;

    $req_uri = trim($_SERVER['REQUEST_URI'] ?? '', '/');
    // Strip query string if any
    $req_path = parse_url($req_uri, PHP_URL_PATH);
    if (!$req_path) return;

    if (preg_match('#^projects?/(happy|udaan|anandadhara|vidharthi|ashiana|swasthya-chakra|janmataru|ayushman-bhava)/?$#i', $req_path, $matches)) {
        $slug = strtolower($matches[1]);
        wp_safe_redirect(home_url('/' . $slug . '/'), 301);
        exit;
    }
}
add_action('template_redirect', 'swapnapuron_project_rewrite_redirect');

