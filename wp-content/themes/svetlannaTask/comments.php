<?php if ( have_comments() ) : ?>
    <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses');?> <?php printf('to “%s”', the_title('', '', false)); ?></h3>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>
    <ol class="commentlist">
     <?php
     wp_list_comments(array(
      ));
      ?>
    </ol>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>
    <?php
    if ( ! comments_open() ) : // There are comments but comments are now closed
        echo"<p class='nocomments'>Comments are closed.</p>";
    endif;

else : // I.E. There are no Comments
    if ( comments_open() ) : // Comments are open, but there are none yet
        // echo"<p>Be the first to write a comment.</p>";
    else : // comments are closed
        echo"<p class='nocomments'>Comments are closed.</p>";
    endif;
endif;

// Display Form/Login info Section
// the comment_form() function handles this and can be used without any paramaters simply as "comment_form()"
comment_form(array(
  // see codex http://codex.wordpress.org/Function_Reference/comment_form for default values
  // tutorial here http://blogaliving.com/wordpress-adding-comment_form-theme/
  'comment_field' => '<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" aria-required="true"></textarea></p>',
  'label_submit' => 'Submit Comment',
  'comment_notes_after' => ''
  ));

// RSS comments link
echo '<div class="comments_rss">';
comments_rss_link('Comments RSS Feed');
echo '</div>';

