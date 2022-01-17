<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo bloginfo('name')?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php
wp_head();
?>
</head>




<body <?php body_class(); ?>>


<?php acf_form_head(); ?>

    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">

                    <nav class="main-nav">

                        <?php

                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                        if ( has_custom_logo() ) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            echo "<a href='".get_bloginfo( 'url' )."'><img src='".$image[0]."' class='logo'></a>";



                            ?>


                            <?php
                        } else {?>
                            <a class="logo" href="<?php echo get_bloginfo( 'url' );?>"><span><?php echo get_bloginfo( 'name' );?></span></a>

                            <?php

                        }
                        ?>

                        <ul class="nav">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'S_top_menu',
                                    'items_wrap' => '%3$s'
                                )
                            );
                            ?>
                            <li><div class="gradient-button"><a id="modal_trigger" href="#modal">About us</a></div></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>


                    </nav>
                </div>
            </div>
            </div>
        </div>
    </header>








