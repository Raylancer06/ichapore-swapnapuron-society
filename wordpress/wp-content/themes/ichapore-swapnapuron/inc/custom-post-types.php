<?php
/**
 * Custom Post Types for Ichapore Swapnapuron Society
 * Registers the "Projects" CPT and related taxonomies.
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

function swapnapuron_register_project_cpt() {
    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'ichapore-swapnapuron'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'ichapore-swapnapuron'),
        'menu_name'             => __('Our Projects', 'ichapore-swapnapuron'),
        'name_admin_bar'        => __('Project', 'ichapore-swapnapuron'),
        'archives'              => __('Project Archives', 'ichapore-swapnapuron'),
        'attributes'            => __('Project Attributes', 'ichapore-swapnapuron'),
        'parent_item_colon'     => __('Parent Project:', 'ichapore-swapnapuron'),
        'all_items'             => __('All Projects', 'ichapore-swapnapuron'),
        'add_new_item'          => __('Add New Project', 'ichapore-swapnapuron'),
        'add_new'               => __('Add New', 'ichapore-swapnapuron'),
        'new_item'              => __('New Project', 'ichapore-swapnapuron'),
        'edit_item'             => __('Edit Project', 'ichapore-swapnapuron'),
        'update_item'           => __('Update Project', 'ichapore-swapnapuron'),
        'view_item'             => __('View Project', 'ichapore-swapnapuron'),
        'view_items'            => __('View Projects', 'ichapore-swapnapuron'),
        'search_items'          => __('Search Projects', 'ichapore-swapnapuron'),
        'not_found'             => __('No projects found', 'ichapore-swapnapuron'),
        'not_found_in_trash'    => __('No projects found in Trash', 'ichapore-swapnapuron'),
        'featured_image'        => __('Project Hero / Main Photo', 'ichapore-swapnapuron'),
        'set_featured_image'    => __('Set hero photo', 'ichapore-swapnapuron'),
        'remove_featured_image' => __('Remove hero photo', 'ichapore-swapnapuron'),
        'use_featured_image'    => __('Use as hero photo', 'ichapore-swapnapuron'),
    );

    $args = array(
        'label'                 => __('Project', 'ichapore-swapnapuron'),
        'description'           => __('Society Grassroots Initiatives and Campaigns', 'ichapore-swapnapuron'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'taxonomies'            => array('project_category'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-heart',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'projects',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'projects', 'with_front' => false),
    );

    register_post_type('project', $args);

    // Register Category Taxonomy
    $cat_labels = array(
        'name'              => _x('Project Categories', 'taxonomy general name', 'ichapore-swapnapuron'),
        'singular_name'     => _x('Project Category', 'taxonomy singular name', 'ichapore-swapnapuron'),
        'search_items'      => __('Search Categories', 'ichapore-swapnapuron'),
        'all_items'         => __('All Categories', 'ichapore-swapnapuron'),
        'edit_item'         => __('Edit Category', 'ichapore-swapnapuron'),
        'update_item'       => __('Update Category', 'ichapore-swapnapuron'),
        'add_new_item'      => __('Add New Category', 'ichapore-swapnapuron'),
        'new_item_name'     => __('New Category Name', 'ichapore-swapnapuron'),
        'menu_name'         => __('Categories', 'ichapore-swapnapuron'),
    );

    register_taxonomy('project_category', array('project'), array(
        'hierarchical'      => true,
        'labels'            => $cat_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'project-category'),
    ));
}

add_action('init', 'swapnapuron_register_project_cpt', 0);
