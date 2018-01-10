<?php
if ( post_password_required() )
	return;
?>
       
        <?php if ( have_comments() ) : ?>

            <?php wp_list_comments('type=comment&callback=format_comment'); ?>

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav class="navigation clearfix" role="navigation">
                <div class="prev"><?php previous_comments_link('Next'); ?></div>
                <div class="next"><?php next_comments_link('Prev'); ?></div>
            </nav>
            <?php endif; ?>
        <?php
            if ( ! comments_open() && get_comments_number() ) : ?>
            <div id="comments">
                <?php echo ""; ?>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (!have_comments()) : ?>
            <div id="comments">
                 <?php echo ""; ?>
            </div>
        <?php endif; ?>

                <?php
                   $args = array(
                          'id_form'           => '',
                          'id_submit'         => 'submit',                      
                          'title_reply'       => '',
                          'title_reply_to'    => __( 'Reply to %s' ),
                          'cancel_reply_link' => __( 'Cansel Reply' ),
                          'label_submit'      => __( 'Submit Comment' ),

                          'comment_field' =>  '
                          <div class="leave-comment">
                          <textarea required class="textarea" name="comment" placeholder="What you think about this?" dir="auto"></textarea>',

                          'must_log_in' => '<p class="must-log-in">' .
                            sprintf(
                              __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                              wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                            ) . '</p>',

                          'logged_in_as' => '<p class="logged-in-as">' .
                            sprintf(
                            __( '<a href="%3$s" title="Log out of this account">Logout?</a>' ),
                              admin_url( 'profile.php' ),
                              $user_identity,
                              wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
                            ) . '</p>',

                          'comment_notes_before' => '',
                          'comment_notes_after' => '',

                          'fields' => apply_filters( 'comment_form_default_fields', array(

                            'author' =>
                            '<div class="inputs"><input required class="textbox" name="author" type="text" id="name" name="name" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' placeholder="Your Name"><br>',

                            'email' =>
                            '<input required class="textbox" type="email" name="email" id="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' placeholder="Your Email"></div>',

                            'url' =>
                            '</div>'
  
                            )
                          ),
                        );

                 ob_start();
                 comment_form($args);
                 $form = ob_get_clean(); 
                 echo str_replace('','', $form);
                ?>
