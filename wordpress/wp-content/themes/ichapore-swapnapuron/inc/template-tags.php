<?php
/**
 * Custom Template Tags & Helper Functions
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get theme option safely with default fallback
 */
function swapnapuron_opt($key, $default = '') {
    return get_option($key, $default);
}

/**
 * Clean site title fallback
 */
function swapnapuron_site_name() {
    $name = get_bloginfo('name');
    if (empty($name) || strpos($name, '.hostingersite.com') !== false || stripos($name, 'WordPress') !== false || stripos($name, 'clean-azure') !== false) {
        return 'Ichapore Swapnapuron Society';
    }
    return $name;
}

/**
 * Clean site tagline fallback
 */
function swapnapuron_site_desc() {
    $desc = get_bloginfo('description');
    if (empty($desc) || stripos($desc, 'Just another') !== false) {
        return 'Grassroots Social Transformation • Est. 2009';
    }
    return $desc;
}

/**
 * Return authentic project image based on slug
 */
function swapnapuron_get_project_image($slug = '') {
    $slug = sanitize_title($slug);
    $uri  = get_template_directory_uri() . '/assets/images/';

    $map = array(
        'ayushman-bhava'  => $uri . 'Ayushman Bhav/ayusman-bhaban-01.avif',
        'swasthya-chakra' => $uri . 'medical-camp.jpg',
        'janmataru'       => $uri . 'janmataru/janmataru-01.avif',
        'happy'           => $uri . 'happy-santa.jpg',
        'udaan'           => $uri . 'udaan-thalassemia.jpg',
        'anandadhara'     => $uri . 'anandadhara-food.jpg',
        'vidharthi'       => $uri . 'vidharthi-education.jpg',
        'ashiana'         => $uri . 'ashiana-birds.jpg',
    );

    if (isset($map[$slug])) {
        return $map[$slug];
    }

    return $uri . 'hero-school.jpg';
}

/**
 * Output Social Media Pills with clean SVG icons
 */
function swapnapuron_social_pills() {
    $fb = swapnapuron_opt('swapnapuron_facebook', 'https://www.facebook.com/ichaporeswapnapuronsociety');
    $tw = swapnapuron_opt('swapnapuron_twitter', 'https://x.com/swapnapuron');
    $ig = swapnapuron_opt('swapnapuron_instagram', 'https://www.instagram.com/ichaporeswapnapuronsociety');
    $yt = swapnapuron_opt('swapnapuron_youtube', 'https://www.youtube.com/channel/UCEfK5BRdIoTHRtRqBZDkIkg');

    echo '<div class="d-flex gap-2">';
    if ($fb) {
        echo '<a href="' . esc_url($fb) . '" target="_blank" rel="noopener" class="social-pill" aria-label="Facebook">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
        </a>';
    }
    if ($tw) {
        echo '<a href="' . esc_url($tw) . '" target="_blank" rel="noopener" class="social-pill" aria-label="X / Twitter">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/></svg>
        </a>';
    }
    if ($ig) {
        echo '<a href="' . esc_url($ig) . '" target="_blank" rel="noopener" class="social-pill" aria-label="Instagram">
            <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
        </a>';
    }
    if ($yt) {
        echo '<a href="' . esc_url($yt) . '" target="_blank" rel="noopener" class="social-pill" aria-label="YouTube">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.04c.032-.419.09-.877.165-1.32.065-.375.148-.75.249-1.085A2.007 2.007 0 0 1 1.903 1.83C3.064 1.52 7.472 1.498 8.051 1.499zm.006 4.02-4.148 2.395 4.148 2.395V6.019z"/></svg>
        </a>';
    }
    echo '</div>';
}

/**
 * Output Project Chips
 */
function swapnapuron_render_chips($post_id = null) {
    if (!$post_id) $post_id = get_the_ID();
    $chips = get_post_meta($post_id, '_project_chips', true);

    if (!empty($chips) && is_array($chips)) {
        echo '<div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">';
        foreach ($chips as $chip) {
            if (!empty($chip['text'])) {
                $icon = esc_attr($chip['icon'] ?: 'verified');
                $text = esc_html($chip['text']);
                echo '<span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">';
                echo '<span class="material-symbols-outlined text-warning fs-6">' . $icon . '</span>';
                echo '<span>' . $text . '</span>';
                echo '</span>';
            }
        }
        echo '</div>';
    }
}
