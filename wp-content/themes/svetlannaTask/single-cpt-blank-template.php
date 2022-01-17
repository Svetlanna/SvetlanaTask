<?php

get_header();
?><section><?php
if ( have_posts() ) :
    custom_post_types_get_custom_template();
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
    <?php if ( have_comments() )  {?>
   <h2 class="comments-title">
    <?php
    printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
        number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
    ?>
    </h2>

<?php
}
    ?>
</section>
<?php

get_footer();
?>

