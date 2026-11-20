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
 * Output Social Media Pills
 */
function swapnapuron_social_pills() {
    $fb = swapnapuron_opt('swapnapuron_facebook', 'https://www.facebook.com/ichaporeswapnapuronsociety');
    $tw = swapnapuron_opt('swapnapuron_twitter', 'https://x.com/swapnapuron');
    $ig = swapnapuron_opt('swapnapuron_instagram', 'https://www.instagram.com/ichaporeswapnapuronsociety');
    $yt = swapnapuron_opt('swapnapuron_youtube', 'https://www.youtube.com/channel/UCEfK5BRdIoTHRtRqBZDkIkg');

    echo '<div class="d-flex gap-2">';
    if ($fb) echo '<a href="' . esc_url($fb) . '" target="_blank" rel="noopener" class="social-pill" aria-label="Facebook">FB</a>';
    if ($tw) echo '<a href="' . esc_url($tw) . '" target="_blank" rel="noopener" class="social-pill" aria-label="X / Twitter">X</a>';
    if ($ig) echo '<a href="' . esc_url($ig) . '" target="_blank" rel="noopener" class="social-pill" aria-label="Instagram">IG</a>';
    if ($yt) echo '<a href="' . esc_url($yt) . '" target="_blank" rel="noopener" class="social-pill" aria-label="YouTube">YT</a>';
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
