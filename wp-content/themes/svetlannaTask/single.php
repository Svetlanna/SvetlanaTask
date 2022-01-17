<?php

get_header();
?><section><?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
    <ul class="comment-list comments">
        <?php
        wp_list_comments( array(
            'style'      => 'ul',
            'short_ping' => true,
            'callback' => 'better_comments'
        ) );
        ?>
    </ul>
</section>



<?php

get_footer();
?>

