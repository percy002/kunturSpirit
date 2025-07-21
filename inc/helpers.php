<?php
function get_translated_url_by_slug($slug)
{
    $query = new WP_Query([
        'post_type' => 'page',
        'name' => $slug,
        'post_status' => 'publish',
        'numberposts' => 1,
    ]);

    if ($query->have_posts()) {
        $query->the_post();
        $translated_id = pll_get_post(get_the_ID());
        wp_reset_postdata();
        return get_permalink($translated_id);
    }

    return '';
}


function get_translated_page_url($slug)
{
    $page = get_page_by_path($slug);
    if ($page) {
        $translated_id = function_exists('pll_get_post') ? pll_get_post($page->ID) : $page->ID;
        return get_permalink($translated_id);
    }
    return '#';
}

?>