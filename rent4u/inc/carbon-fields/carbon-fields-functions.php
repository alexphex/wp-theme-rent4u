<?php

/**
 * Carbon Fields
 * (Carbon fields is a library which enables easy creation of custom (meta) fields in the WordPress administration panel)
 * https://carbonfields.net/
 */

 use Carbon_Fields\Container;
 use Carbon_Fields\Field;
 
 add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
 function crb_attach_theme_options() {
    Container::make('theme_options', __('Theme Options'))
        ->add_tab(__('Home'), array(
            Field::make( 'image', 'crb_book_block_image', 'Book Car Image (preferably 548/117 pixels)' )
                ->set_value_type( 'url' ),
            // Why us section
            Field::make('text', 'crb_us_title', 'Title Section (Why choose Us)'),
            Field::make('text', 'crb_us_subtitle', 'Subtitle Section'),
            Field::make( 'image', 'crb_us_icon_1', 'Why Us icon 1' )
                ->set_value_type( 'url' ),
            Field::make('text', 'crb_us_title_icon_1', 'Icon title'),
            Field::make( 'image', 'crb_us_icon_2', 'Why Us icon 2' )
                ->set_value_type( 'url' ),
            Field::make('text', 'crb_us_title_icon_2', 'Icon title'),
            Field::make( 'image', 'crb_us_icon_3', 'Why Us icon 3' )
                ->set_value_type( 'url' ),
            Field::make('text', 'crb_us_title_icon_3', 'Icon title'),
            Field::make( 'image', 'crb_us_icon_4', 'Why Us icon 4' )
                ->set_value_type( 'url' ),
            Field::make('text', 'crb_us_title_icon_4', 'Icon title'),
            // Customer section
            Field::make('text', 'crb_customer_title', 'Title Section (Customer)'),
            Field::make('text', 'crb_customer_subtitle', 'Subtitle Section'),
        ))
        ->add_tab(__('About'), array(
            Field::make( 'image', 'crb_about_image', 'About (image)' )
            ->set_value_type( 'url' ),
            Field::make('text', 'crb_about_title', 'About title'),
            Field::make('text', 'crb_about_subtitle', 'About subtitle')
        ))
        ->add_tab(__('Cars'), array(
            Field::make('text', 'crb_favorite_car_title', 'Title Section (Favorite cars)'),
            Field::make('text', 'crb_favorite_car_subtitle', 'Subtitle Section'),
            Field::make('text', 'crb_best_car_title', 'Title Section (Best cars)'),
            Field::make('text', 'crb_best_car_subtitle', 'Subtitle Section')
        ))
        ->add_tab(__('Blog'), array(
            Field::make('text', 'crb_blog_title', 'Title Section (Blog)'),
            Field::make('text', 'crb_blog_subtitle', 'Subtitle Section'),
        ))
        ->add_tab(__('Contact'), array(
            Field::make('text', 'crb_contact_title', 'Title Section (Contact Form)'),
            Field::make('text', 'crb_contact_location', 'Location Section (Contact Form)'),
            Field::make('text', 'crb_contact_phone', 'Phone Section (Contact Form)'),
            Field::make('text', 'crb_contact_email', 'Email Section (Contact Form)')
        ))
        ->add_tab(__('Map'), array(
            Field::make('text', 'google_map_link', 'Link to Google Map')
                ->set_help_text('Paste Google Maps link here')
        ))
        ->add_tab(__('Buttons'), array(
            Field::make('text', 'crb_contact_btn_text', 'Botton 1 text'),
            Field::make('text', 'crb_contact_btn_url', 'Button 1 link'),
        ));

}