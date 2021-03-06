<?php
function university_post_types()
{
    register_post_type('event', [
        'supports' => [
            'title', 'editor', 'excerpt'
        ],
        'rewrite' => [
            'slug' => 'events'
        ],
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add new event',
            'edit_item' => 'Edit event',
            'all_items' => 'All events',
            'singular_name' => 'Event'
        ],
        'menu_icon' => 'dashicons-calendar'
    ]);
}
add_action('init', 'university_post_types');
