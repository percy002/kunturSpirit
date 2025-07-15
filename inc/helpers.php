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
?>