<?php

  //Comments Template
  function format_comment($comment, $args, $depth) {
  
     $GLOBALS['comment'] = $comment; ?>
     
      <div class="commentitem" <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
              
          <span class="author" dir="auto">
              <?php printf(__('%s'), get_comment_author()) ?>:
          </span>
          

          
          <div dir="auto">
           <?php comment_text(); ?>
          <?php if ($comment->comment_approved == '0') : ?>
              <i>Your comment is awaiting moderation</i><br>
          <?php endif; ?>
          <!--  <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> -->
          </div>
    
      </div>
        
<?php } ?>