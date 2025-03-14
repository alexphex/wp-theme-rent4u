<?php

/**
 * Custom Posts
 */
function rent4u_custom_post_types() {
    // Register custom post "Favorite Cars"
    $favorite_cars_labels = array(
        'name'                => 'Favorite Cars',
        'singular_name'       => 'Favorite Car',
        'menu_name'           => 'Favorite Cars',
        'name_admin_bar'      => 'Favorite Car',
        'add_new'             => 'Add New',
        'add_new_item'        => 'Add New Favorite Car',
        'new_item'            => 'New Favorite Car',
        'edit_item'           => 'Edit Favorite Car',
        'view_item'           => 'View Favorite Car',
        'all_items'           => 'All Favorite Cars',
        'search_items'        => 'Search Favorite Cars',
        'parent_item_colon'   => 'Parent Favorite Car:',
        'not_found'           => 'No Favorite Cars found.',
        'not_found_in_trash'  => 'No Favorite Cars found in Trash.',
    );

    $favorite_cars_args = array(
        'labels'              => $favorite_cars_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-car', // Иконка машинки
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'favorite-cars' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    );

    register_post_type( 'favorite_cars', $favorite_cars_args );

    // Register custom post "Rent Cars"
    $rent_cars_labels = array(
        'name'                => 'Rent Cars',
        'singular_name'       => 'Rent Car',
        'menu_name'           => 'Rent Cars',
        'name_admin_bar'      => 'Rent Car',
        'add_new'             => 'Add New',
        'add_new_item'        => 'Add New Rent Car',
        'new_item'            => 'New Rent Car',
        'edit_item'           => 'Edit Rent Car',
        'view_item'           => 'View Rent Car',
        'all_items'           => 'All Rent Cars',
        'search_items'        => 'Search Rent Cars',
        'parent_item_colon'   => 'Parent Rent Car:',
        'not_found'           => 'No Rent Cars found.',
        'not_found_in_trash'  => 'No Rent Cars found in Trash.',
    );

    $rent_cars_args = array(
        'labels'              => $rent_cars_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-car', // Иконка машинки
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'rent-cars' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    );

    register_post_type( 'rent_cars', $rent_cars_args );

    // Register custom post "Blog"
    $blog_labels = array(
        'name'                => 'Blog',
        'singular_name'       => 'Blog Post',
        'menu_name'           => 'Blog',
        'name_admin_bar'      => 'Blog Post',
        'add_new'             => 'Add New',
        'add_new_item'        => 'Add New Blog Post',
        'new_item'            => 'New Blog Post',
        'edit_item'           => 'Edit Blog Post',
        'view_item'           => 'View Blog Post',
        'all_items'           => 'All Blog Posts',
        'search_items'        => 'Search Blog Posts',
        'parent_item_colon'   => 'Parent Blog Post:',
        'not_found'           => 'No Blog Posts found.',
        'not_found_in_trash'  => 'No Blog Posts found in Trash.',
    );

    $blog_args = array(
        'labels'              => $blog_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-admin-post', // Иконка для блога
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'blog' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    );

    register_post_type( 'blog', $blog_args );

    // Register custom post "Testimonials"
    $testimonials_labels = array(
        'name'                => 'Testimonials',
        'singular_name'       => 'Testimonial',
        'menu_name'           => 'Testimonials',
        'name_admin_bar'      => 'Testimonial',
        'add_new'             => 'Add New',
        'add_new_item'        => 'Add New Testimonial',
        'new_item'            => 'New Testimonial',
        'edit_item'           => 'Edit Testimonial',
        'view_item'           => 'View Testimonial',
        'all_items'           => 'All Testimonials',
        'search_items'        => 'Search Testimonials',
        'parent_item_colon'   => 'Parent Testimonial:',
        'not_found'           => 'No Testimonials found.',
        'not_found_in_trash'  => 'No Testimonials found in Trash.',
    );

    $testimonials_args = array(
        'labels'              => $testimonials_labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-testimonial', // Иконка для отзывов
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'testimonials' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
    );

    register_post_type( 'testimonials', $testimonials_args );
}

add_action( 'init', 'rent4u_custom_post_types' );
