<?php
/**
 * Project Custom Fields & Meta Boxes
 * Provides rich, intuitive fields in the Project Editor without requiring third-party plugins.
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

function swapnapuron_add_project_meta_boxes() {
    add_meta_box(
        'swapnapuron_project_details',
        __('Project Blueprint & Layout Settings', 'ichapore-swapnapuron'),
        'swapnapuron_render_project_meta_box',
        'project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'swapnapuron_add_project_meta_boxes');

function swapnapuron_render_project_meta_box($post) {
    wp_nonce_field('swapnapuron_save_project_meta', 'swapnapuron_project_nonce');

    // Retrieve saved meta
    $badge       = get_post_meta($post->ID, '_project_badge', true);
    $tagline     = get_post_meta($post->ID, '_project_tagline', true);
    $glow_color  = get_post_meta($post->ID, '_project_glow_color', true) ?: '#dc3e26';
    $quote       = get_post_meta($post->ID, '_project_quote', true);
    $quote_sub   = get_post_meta($post->ID, '_project_quote_sub', true);

    // 4 Header Chips
    $chips = get_post_meta($post->ID, '_project_chips', true) ?: array(
        array('icon' => 'verified', 'text' => ''),
        array('icon' => 'verified', 'text' => ''),
        array('icon' => 'verified', 'text' => ''),
        array('icon' => 'verified', 'text' => '')
    );

    // 3 Deliverables
    $deliverables = get_post_meta($post->ID, '_project_deliverables', true) ?: array(
        array('icon' => 'star', 'title' => '', 'desc' => ''),
        array('icon' => 'star', 'title' => '', 'desc' => ''),
        array('icon' => 'star', 'title' => '', 'desc' => '')
    );

    // 4 Impact Stats
    $stats = get_post_meta($post->ID, '_project_stats', true) ?: array(
        array('num' => '', 'label' => '', 'sub' => '', 'color' => 'text-terracotta'),
        array('num' => '', 'label' => '', 'sub' => '', 'color' => 'text-moss'),
        array('num' => '', 'label' => '', 'sub' => '', 'color' => 'text-primary'),
        array('num' => '', 'label' => '', 'sub' => '', 'color' => 'text-success')
    );

    // 5 Checklist Highlights
    $highlights = get_post_meta($post->ID, '_project_highlights', true) ?: array('', '', '', '', '');
    ?>

    <style>
        .iss-field-row { margin-bottom: 15px; }
        .iss-field-row label { display: block; font-weight: 600; margin-bottom: 4px; }
        .iss-section-hdr { background: #f0f0f1; padding: 10px 14px; font-weight: bold; border-left: 4px solid #dc3e26; margin: 24px 0 16px 0; }
        .iss-grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px; }
        .iss-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 14px; }
        .iss-box-card { background: #fafafa; border: 1px solid #e2e4e7; border-radius: 6px; padding: 12px; }
    </style>

    <div class="iss-section-hdr" style="margin-top:0;">1. Header &amp; Visual Identity</div>
    <div class="iss-grid-3">
        <div class="iss-field-row">
            <label><?php esc_html_e('Initiative Category Badge', 'ichapore-swapnapuron'); ?></label>
            <input type="text" name="_project_badge" value="<?php echo esc_attr($badge); ?>" class="widefat" placeholder="e.g., Animal Safety & Welfare Initiative" />
        </div>
        <div class="iss-field-row">
            <label><?php esc_html_e('Project Subtitle / Tagline', 'ichapore-swapnapuron'); ?></label>
            <input type="text" name="_project_tagline" value="<?php echo esc_attr($tagline); ?>" class="widefat" placeholder="e.g., Reflective Collar Initiative for Street Dogs" />
        </div>
        <div class="iss-field-row">
            <label><?php esc_html_e('Ambient Glow Color (Hex)', 'ichapore-swapnapuron'); ?></label>
            <input type="text" name="_project_glow_color" value="<?php echo esc_attr($glow_color); ?>" class="widefat" placeholder="#dc3e26" />
        </div>
    </div>

    <div class="iss-section-hdr">2. Header Feature Badge Chips (4 Chips)</div>
    <div class="iss-grid-4">
        <?php for ($i = 0; $i < 4; $i++): ?>
            <div class="iss-box-card">
                <strong>Chip <?php echo $i + 1; ?></strong>
                <div class="iss-field-row" style="margin-top:8px;">
                    <label>Icon Name (<a href="https://fonts.google.com/icons" target="_blank">Google Icon</a>)</label>
                    <input type="text" name="_project_chips[<?php echo $i; ?>][icon]" value="<?php echo esc_attr($chips[$i]['icon'] ?? 'verified'); ?>" class="widefat" />
                </div>
                <div class="iss-field-row">
                    <label>Chip Text</label>
                    <input type="text" name="_project_chips[<?php echo $i; ?>][text]" value="<?php echo esc_attr($chips[$i]['text'] ?? ''); ?>" class="widefat" placeholder="e.g., Enhance Safety" />
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="iss-section-hdr">3. Overview Callout Quote</div>
    <div class="iss-field-row">
        <label><?php esc_html_e('Highlight Quote (Left Column Callout)', 'ichapore-swapnapuron'); ?></label>
        <textarea name="_project_quote" rows="2" class="widefat" placeholder="e.g., There is only one happiness in life, to love and be loved."><?php echo esc_textarea($quote); ?></textarea>
    </div>
    <div class="iss-field-row">
        <label><?php esc_html_e('Quote Attribution / Subtext', 'ichapore-swapnapuron'); ?></label>
        <input type="text" name="_project_quote_sub" value="<?php echo esc_attr($quote_sub); ?>" class="widefat" placeholder="e.g., Core belief of Ichapore Swapnapuron Society" />
    </div>

    <div class="iss-section-hdr">4. Key Deliverables (3 Feature Cards)</div>
    <div class="iss-grid-3">
        <?php for ($j = 0; $j < 3; $j++): ?>
            <div class="iss-box-card">
                <strong>Deliverable Card <?php echo $j + 1; ?></strong>
                <div class="iss-field-row" style="margin-top:8px;">
                    <label>Icon Name</label>
                    <input type="text" name="_project_deliverables[<?php echo $j; ?>][icon]" value="<?php echo esc_attr($deliverables[$j]['icon'] ?? 'star'); ?>" class="widefat" />
                </div>
                <div class="iss-field-row">
                    <label>Title</label>
                    <input type="text" name="_project_deliverables[<?php echo $j; ?>][title]" value="<?php echo esc_attr($deliverables[$j]['title'] ?? ''); ?>" class="widefat" />
                </div>
                <div class="iss-field-row">
                    <label>Description</label>
                    <textarea name="_project_deliverables[<?php echo $j; ?>][desc]" rows="3" class="widefat"><?php echo esc_textarea($deliverables[$j]['desc'] ?? ''); ?></textarea>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="iss-section-hdr">5. Impact So Far (4 Metric Counters)</div>
    <div class="iss-grid-4">
        <?php for ($k = 0; $k < 4; $k++): ?>
            <div class="iss-box-card">
                <strong>Metric <?php echo $k + 1; ?></strong>
                <div class="iss-field-row" style="margin-top:8px;">
                    <label>Stat Number</label>
                    <input type="text" name="_project_stats[<?php echo $k; ?>][num]" value="<?php echo esc_attr($stats[$k]['num'] ?? ''); ?>" class="widefat" placeholder="e.g., 1,200+" />
                </div>
                <div class="iss-field-row">
                    <label>Metric Label</label>
                    <input type="text" name="_project_stats[<?php echo $k; ?>][label]" value="<?php echo esc_attr($stats[$k]['label'] ?? ''); ?>" class="widefat" placeholder="e.g., Students Screened" />
                </div>
                <div class="iss-field-row">
                    <label>Subtext</label>
                    <input type="text" name="_project_stats[<?php echo $k; ?>][sub]" value="<?php echo esc_attr($stats[$k]['sub'] ?? ''); ?>" class="widefat" placeholder="e.g., HPLC testing" />
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="iss-section-hdr">6. Program Highlights (5 Checklist Points)</div>
    <div class="iss-field-row">
        <?php for ($h = 0; $h < 5; $h++): ?>
            <div style="margin-bottom:8px; display:flex; align-items:center; gap:8px;">
                <span style="font-weight:bold; width:24px;"><?php echo $h + 1; ?>.</span>
                <input type="text" name="_project_highlights[<?php echo $h; ?>]" value="<?php echo esc_attr($highlights[$h] ?? ''); ?>" class="widefat" placeholder="Checklist point <?php echo $h + 1; ?>" />
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

function swapnapuron_save_project_meta($post_id) {
    if (!isset($_POST['swapnapuron_project_nonce']) || !wp_verify_nonce($_POST['swapnapuron_project_nonce'], 'swapnapuron_save_project_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save simple string fields
    if (isset($_POST['_project_badge'])) {
        update_post_meta($post_id, '_project_badge', sanitize_text_field($_POST['_project_badge']));
    }
    if (isset($_POST['_project_tagline'])) {
        update_post_meta($post_id, '_project_tagline', sanitize_text_field($_POST['_project_tagline']));
    }
    if (isset($_POST['_project_glow_color'])) {
        update_post_meta($post_id, '_project_glow_color', sanitize_hex_color($_POST['_project_glow_color']) ?: sanitize_text_field($_POST['_project_glow_color']));
    }
    if (isset($_POST['_project_quote'])) {
        update_post_meta($post_id, '_project_quote', sanitize_textarea_field($_POST['_project_quote']));
    }
    if (isset($_POST['_project_quote_sub'])) {
        update_post_meta($post_id, '_project_quote_sub', sanitize_text_field($_POST['_project_quote_sub']));
    }

    // Save Chips array
    if (isset($_POST['_project_chips']) && is_array($_POST['_project_chips'])) {
        $sanitized_chips = array();
        foreach ($_POST['_project_chips'] as $chip) {
            $sanitized_chips[] = array(
                'icon' => sanitize_text_field($chip['icon'] ?? 'verified'),
                'text' => sanitize_text_field($chip['text'] ?? '')
            );
        }
        update_post_meta($post_id, '_project_chips', $sanitized_chips);
    }

    // Save Deliverables array
    if (isset($_POST['_project_deliverables']) && is_array($_POST['_project_deliverables'])) {
        $sanitized_deliv = array();
        foreach ($_POST['_project_deliverables'] as $item) {
            $sanitized_deliv[] = array(
                'icon'  => sanitize_text_field($item['icon'] ?? 'star'),
                'title' => sanitize_text_field($item['title'] ?? ''),
                'desc'  => sanitize_textarea_field($item['desc'] ?? '')
            );
        }
        update_post_meta($post_id, '_project_deliverables', $sanitized_deliv);
    }

    // Save Stats array
    if (isset($_POST['_project_stats']) && is_array($_POST['_project_stats'])) {
        $sanitized_stats = array();
        $colors = array('text-terracotta', 'text-moss', 'text-primary', 'text-success');
        foreach ($_POST['_project_stats'] as $idx => $st) {
            $sanitized_stats[] = array(
                'num'   => sanitize_text_field($st['num'] ?? ''),
                'label' => sanitize_text_field($st['label'] ?? ''),
                'sub'   => sanitize_text_field($st['sub'] ?? ''),
                'color' => $colors[$idx % 4]
            );
        }
        update_post_meta($post_id, '_project_stats', $sanitized_stats);
    }

    // Save Highlights array
    if (isset($_POST['_project_highlights']) && is_array($_POST['_project_highlights'])) {
        $sanitized_hl = array();
        foreach ($_POST['_project_highlights'] as $hl) {
            $sanitized_hl[] = sanitize_text_field($hl);
        }
        update_post_meta($post_id, '_project_highlights', $sanitized_hl);
    }
}
add_action('save_post_project', 'swapnapuron_save_project_meta');
