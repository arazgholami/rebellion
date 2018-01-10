<?php


function status($author = false) {
    global $wpdb;
$now = gmdate("Y-m-d H:i:s",time());

    if ($author) $query = "SELECT post_content FROM $wpdb->posts WHERE post_author = '$author' AND post_status= 'publish' AND post_date < '$now'";
        else $query = "SELECT post_content FROM $wpdb->posts WHERE post_status = 'publish' AND post_date < '$now'";

$words = $wpdb->get_results($query);
if ($words) {
    foreach ($words as $word) {
        $post = strip_tags($word->post_content);
        $post = explode(' ', $post);
        $count = count($post);
        $totalcount = $count + $oldcount;
        $oldcount = $totalcount;
    }
} else {
    $totalcount=0;
}

    
    
    function first_post_date($format = "Y") {
         $ax_args = array(
         'numberposts' => -1,
         'post_status' => 'publish',
         'order' => 'ASC'
         );

         $ax_get_all = get_posts($ax_args);
         $ax_first_post = $ax_get_all[0];
         $ax_first_post_date = $ax_first_post->post_date;
         return date($format, strtotime($ax_first_post_date));
    }
    
    
    return number_format($totalcount) . " word since " . first_post_date() . ".";
    
}