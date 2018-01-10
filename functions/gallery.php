<?php



remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'neo_gallery_shortcode');
function neo_gallery_shortcode($attr) {

    $posts_order_string = $attr['ids'];
    $posts_order = explode(',', $posts_order_string);
    $output = "<div class=\"gallery clearfix\">";
    $posts = get_posts(array(
          'include' => $posts_order,
          'post_type' => 'attachment', 
          'orderby' => 'post__in'
    ));

    if($attr['orderby'] == 'rand') {
        shuffle($posts); 
    } 
    foreach($posts as $imagePost){
          $caption= wp_get_attachment_caption($imagePost->ID);
          $output .= "
          <a href='".get_attachment_link($imagePost->ID)."'>
            <div class='gallery-item'>
              <img src='".wp_get_attachment_image_src($imagePost->ID, 'thumbnail')[0]."'>
            </div>";
          if($caption){$output .= "<span>".$caption."</span>";}      
          $output .= "</a>";
    }

    $output .= "</div>";
    return $output;
}

?>


