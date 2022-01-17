<script src="<?php
echo get_stylesheet_directory_uri();
?>/assets/js/script.js"></script>


<footer>
    <div class="container">
        <div class="row">
            <div class=" col-lg-3 col-12 d7">
                <div class="footer-logo">

                    <?php

                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                    if ( has_custom_logo() ) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                        echo "<a href='" . get_bloginfo('url') . "'><img src='" . $image[0] . "' class='logo'></a>";
                    }
                    ?>

                </div>
                <p class="foot_col1_text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget diam at mi sollicitudin
                </p>
            </div>
            <div class="col-lg-3 foot_services">
                <h3 class="foot_serv_title">
                    Nos services
                </h3>
                <ul>
                    <li>Avis clients</li>
                    <li>Mentions légales</li>
                    <li> Plan du site<</li>
                    <li> Blog d’Idéematic</li>
                    <li>Le dictionnaire du digital</li>
                    <li>Notre boutique </li>
                </ul>

            </div>

            <div class="col-lg-6 col-12 subs4">
                <h3 class="foot_serv_title">Sign up for Special Offers!</h3>
                <div class="subscribe"><input type="email" value="<?php echo  get_bloginfo('admin_email'); ?>" >
                    <button>Subscribe</button>
                </div>
            </div>
        </div>


</footer>







</body>
</html>