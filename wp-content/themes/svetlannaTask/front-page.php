<?php

get_header();
?>
    <div class="main-banner wow fadeIn" style="
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sanstitre-1.png);
            " id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="first-span">
                                            <?php the_field('advanced_platform'); ?>

                                        </p>
                                        <div class="h2-text"><h2>
                                                <?php the_field('title'); ?>
                                              </h2></div>
                                        <p class="desc">
                                            <?php the_field('description'); ?></p>



                                    </div>
                                    <div class="col-lg-12">
                                        <div class="white-button first-button menu-item">
                                            <a href="<?php the_field('button_url'); ?>"><?php the_field('button_title'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <?php $first_bl_background = get_field( 'first-bl-background' ); ?>
                                <?php if ( $first_bl_background ) : ?>
                                    <img src="<?php echo esc_url( $first_bl_background['url'] ); ?>" alt="<?php echo esc_attr( $first_bl_background['alt'] ); ?>" />
                                <?php endif; ?>
<!--                                <img src="http://localhost/svetlanaTask/wp-content/uploads/2022/01/NoPath@2x.png" alt="">
-->                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container">
    <div class="row PARTNERS">
        <div class="partners-item">
            <?php $image1 = get_field( 'image1' ); ?>
            <?php if ( $image1 ) : ?>
                <img src="<?php echo esc_url( $image1['url'] ); ?>" alt="<?php echo esc_attr( $image1['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="partners-item">
            <?php $image2 = get_field( 'image2' ); ?>
            <?php if ( $image2 ) : ?>
                <img src="<?php echo esc_url( $image2['url'] ); ?>" alt="<?php echo esc_attr( $image2['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="partners-item">

            <?php $image3 = get_field( 'image3' ); ?>
            <?php if ( $image3 ) : ?>
                <img src="<?php echo esc_url( $image3['url'] ); ?>" alt="<?php echo esc_attr( $image3['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="partners-item">
            <?php $image4 = get_field( 'image4' ); ?>
            <?php if ( $image4 ) : ?>
                <img src="<?php echo esc_url( $image4['url'] ); ?>" alt="<?php echo esc_attr( $image4['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="partners-item">

            <?php $image5 = get_field( 'image5' ); ?>
            <?php if ( $image5 ) : ?>
                <img src="<?php echo esc_url( $image5['url'] ); ?>" alt="<?php echo esc_attr( $image5['alt'] ); ?>" />
            <?php endif; ?>
        </div>


    </div>
    </div>
<div class="container-fluid" id="bg-left-bottom">
<div class="for_bg">
    <div class="row second-block">
        <div class="col-lg-6 col-12">
            <span class="red-line"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Screenshot_1.png"></span>
            <h2 class="second-block-first-h2"><?php the_field( 'business_title' ); ?></h2>
            <p class="second-block-first-p"><?php the_field( 'business_description' ); ?>
            </p>
            <a href="<?php the_field( 'business_button_url' ); ?>" class="second-block-first-link"><?php the_field( 'business_button' ); ?>
            </a>
        </div>
        <div class="col-lg-6 col-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="s_sec">
                            <?php $col1_icon = get_field( 'col1_icon' ); ?>
                            <?php if ( $col1_icon ) : ?>
                                <img src="<?php echo esc_url( $col1_icon['url'] ); ?>" alt="<?php echo esc_attr( $col1_icon['alt'] ); ?>" />
                            <?php endif; ?>
                            <p class="title"><?php the_field( 'col1_title' ); ?>
                            </p>
                            <span class="red-line"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Screenshot_1.png"></span>
                            <p class="descr"><?php the_field( 'col1_description' ); ?>
                            </p>
                        </div>

                        <div class="s_sec">

                            <?php $col3_icon = get_field( 'col3_icon' ); ?>
                            <?php if ( $col3_icon ) : ?>
                                <img src="<?php echo esc_url( $col3_icon['url'] ); ?>" alt="<?php echo esc_attr( $col3_icon['alt'] ); ?>" />
                            <?php endif; ?>
                            <p class="title"><?php the_field( 'col3_title' ); ?></p>
                            <span class="red-line"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Screenshot_1.png"></span>
                            <p class="descr"><?php the_field( 'col3_description' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">


                        <div class="s_sec">
                        <span ><?php $col2_icon = get_field( 'col2_icon' ); ?>
                            <?php if ( $col2_icon ) : ?>
                                <img src="<?php echo esc_url( $col2_icon['url'] ); ?>" alt="<?php echo esc_attr( $col2_icon['alt'] ); ?>" />
                            <?php endif; ?></span>

                            <p class="title"><?php the_field( 'col2_title' ); ?></p>
                            <span class="red-line"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Screenshot_1.png"></span>
                            <p class="descr"><?php the_field( 'col2_description' ); ?></p>
                        </div>



                        <div class="s_sec">
                            <?php $col4_icon = get_field( 'col4_icon' ); ?>
                            <?php if ( $col4_icon ) : ?>
                                <img src="<?php echo esc_url( $col4_icon['url'] ); ?>" alt="<?php echo esc_attr( $col4_icon['alt'] ); ?>" />
                            <?php endif; ?>
                            <p class="title"><?php the_field( 'col4_title' ); ?></p>
                            <span class="red-line"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/Screenshot_1.png"></span>
                            <p class="descr"><?php the_field( 'col4_description' ); ?></p>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
</div>
<div class="business">
    <div class="full-width-img">
        <?php $left_image = get_field( 'left_image' ); ?>
        <?php if ( $left_image ) : ?>
            <img src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
        <?php endif; ?>
<!--        <img src="http://localhost/svetlanaTask/wp-content/uploads/2022/01/NoPath@2x.png">
-->    </div>
    <div class="col-lg-6 col-12 text-block">
        <span class="red-line"><img src="http://localhost/svetlanaTask/wp-content/themes/svetlannaTask/assets/images/Screenshot_1.png"></span>
        <h2 class="second-block-first-h2"><?php the_field( 'best_platform_title' ); ?></h2>
        <p class="second-block-first-p"><?php the_field( 'best_platform_description' ); ?></p>
        <a href="<?php the_field( 'best_platform_button_url' ); ?>" class="second-block-first-link"><?php the_field( 'best_platform_button_text' ); ?></a>
    </div>
</div>






    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <span class="grey-title"><?php the_field( 'firts_text' ); ?></span>
                    <h4><?php the_field( 'platform_overview_title' ); ?></h4>

                    <p class="text-block"><?php the_field( 'platform_overview_description' ); ?></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">



                            <div class="fade-class">
                                <div><?php $slider_image_1 = get_field( 'slider_image_1' ); ?>
                                    <?php if ( $slider_image_1 ) : ?>
                                        <img src="<?php echo esc_url( $slider_image_1['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_1['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div><?php $slider_image_2 = get_field( 'slider_image_2' ); ?>
                                    <?php if ( $slider_image_2 ) : ?>
                                        <img src="<?php echo esc_url( $slider_image_2['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_2['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div><?php $slider_image_3 = get_field( 'slider_image_3' ); ?>
                                    <?php if ( $slider_image_3 ) : ?>
                                        <img src="<?php echo esc_url( $slider_image_3['url'] ); ?>" alt="<?php echo esc_attr( $slider_image_3['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>

                            </div>



                        </div>
                </div>
            </div>
        </div>
    </div>



</div>




    <div class="business-sec">

        <div class="col-lg-6 col-12 text-block">
            <div class="cont">

            <span class="red-line"><img src="http://localhost/svetlanaTask/wp-content/themes/svetlannaTask/assets/images/Screenshot_1.png"></span>
            <h2 class="second-block-first-h2"><?php the_field( 'platform2_title' ); ?></h2>
            <p class="second-block-first-p"><?php the_field( 'platform2_description' ); ?></p>
            <a href="<?php the_field( 'platform2__button_url' ); ?>" class="second-block-first-link"><?php the_field( 'platform2_button_text' ); ?></a>
                </div>
        </div>
        <div class="full-width-img-sec">
            <?php $platform2_right_image = get_field( 'platform2_right_image' ); ?>
            <?php if ( $platform2_right_image ) : ?>
                <img src="<?php echo esc_url( $platform2_right_image['url'] ); ?>" alt="<?php echo esc_attr( $platform2_right_image['alt'] ); ?>" />
            <?php endif; ?>        </div>
    </div>
<div class="container" id="num2">
    <div class="row">
        <div class="col-lg-6 col-12">
            <span class="red-line"><img src="http://localhost/svetlanaTask/wp-content/themes/svetlannaTask/assets/images/Screenshot_1.png"></span>
            <h2 class="second-block-first-h2"><?php the_field( 'business_solution_title' ); ?></h2>
            <p class="second-block-first-p"><?php the_field( 'business_solution_description' ); ?></p>
            <a href="<?php the_field( 'business_solution_button_url' ); ?>" class="second-block-first-button"><?php the_field( 'business_solution_button_title' ); ?></a>


        </div>
        <div class="col-lg-6 col-12 oval-parrent">
            <div class="col-12">
                <div class="number">
                    <div class="oval"><span>1</span></div>
                    <div class="title"><h4><?php the_field( 'research_block_1_title' ); ?></h4></div>
                </div>
                <div class="line">
                <p><?php the_field( 'research_block_1_description' ); ?></p>
                </div>
            </div>
            <div class="col-12">
                <div class="number">
                    <div class="oval"><span>1</span></div>
                    <div class="title"><h4><?php the_field( 'research_block_2_title' ); ?></h4></div>
                </div>
                <div class="line">
                    <p><?php the_field( 'research_block_2_description' ); ?></p>
                </div>
            </div>
            <div class="col-12">
                <div class="number">
                    <div class="oval"><span>1</span></div>
                    <div class="title"><h4><?php the_field( 'research_block_3_title' ); ?></h4></div>
                </div>
                <div class="line">
                    <p><?php the_field( 'research_block_3_description' ); ?></p>
                </div>
            </div>


        </div>
    </div>

</div>




    <div class="the-clients">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Don't Just Take our Word for it!</h4>
                </div>
            </div>
<div class="col-lg-12 col-12">
    <div class="col-lg-12 col-12 counterss">
        <div class="s5">
            <span id="counter1"></span>
            <span class="counter-title"><?php the_field( 'number_1_title' ); ?></span>
            <!-- counts -->
        </span>
        </div>
        <div class="s5">

            <span id="counter2"></span>
            <span class="counter-title"><?php the_field( 'number_2_title' ); ?></span>
            <!-- counts -->
        </div>
        <div class="s5">

            <span id="counter3"></span>
            <span class="counter-title"><?php the_field( 'number_3_title' ); ?>
</span>
            <!-- counts -->
        </div>
        <div class="s5">

            <span id="counter4"></span>
            <span class="counter-title"><?php the_field( 'number_4_title' ); ?>
</span>
            <!-- counts -->
        </div>

        <script>
            let counts=setInterval(updated);
            let upto=0;
            function updated(){
                var count= document.getElementById("counter1");
                count.innerHTML=++upto;
                if(upto===<?php the_field( 'number_one' ); ?>)
                {
                    clearInterval(counts);
                }
            }
            let counts2=setInterval(updated2);
            let upto2=0;
            function updated2(){
                var count= document.getElementById("counter2");
                count.innerHTML=++upto2;
                if(upto2===<?php the_field( 'number_2' ); ?>)
                {
                    clearInterval(counts2);
                }
            }




            let counts3=setInterval(updated3);
            let upto3=0;
            function updated3(){
                var count= document.getElementById("counter3");
                count.innerHTML=++upto3;
                if(upto3===<?php the_field( 'number_3' ); ?>)
                {
                    clearInterval(counts3);
                }
            }


            let counts4=setInterval(updated4);
            let upto4=0;
            function updated4(){
                var count= document.getElementById("counter4");
                count.innerHTML=++upto4;
                if(upto4===<?php the_field( 'number_4' ); ?>)
                {
                    clearInterval(counts4);
                }
            }
        </script>
</div>


        </div>
    </div>
    </div>



        <div id="clients" class="the-clients">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="naccs">
                            <div class="grid">
                                <div class="row">
                                    <div class="col-lg-6 col-12">

                                    <div class="final-sld-class">

                                            <?php

                                            $args = array(
                                                //   'status'  => 'hold',
                                                'number'  => '5',

                                            );
                                            $comments = get_comments( $args );

                                            foreach ( $comments as $comment ) {
                                                ?><div>
                                                <div class="review_flex">
                                                    <div class="imgsec">
                                                      <?php
                                                        echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                                    </div>
                                                    <div class="info_sec">
                                                        <h3><?php echo $comment->comment_author;?></h3>



                                                            <span class="role">
                                                                <?php print_r(the_field('role',$comment));?>

                                                            </span>
                                                              <p><?php echo $comment->comment_content;?></p>
                                                        <form>
                                                            <fieldset>
                                                                <div class="col-lg-4 col-sm-4 col-12">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </fieldset>
                                                        </form>





                                                    </div>
                                                </div>

                                                </div>
                                                <?php
                                            }
                                            ?>


                                    </div>

                                </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="right_block ds">
                                            <div class="title"><h3><?php the_field( 'happ-users-title' ); ?></h3></div>
                                            <div class="description"><p><?php the_field( 'happ-users-description' ); ?></p></div>
                                            <div class="button_block">
                                                <div>
                                                    <a href="<?php the_field( 'happ-users-button_url'); ?>" class="for-gradient"><?php the_field( '-happ-usersbutton-title' ); ?></a>
                                                    <a href="<?php the_field( 'happ-users-button_url'); ?>" class="buton_back"><?php the_field( '-happ-usersbutton-title' ); ?></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php

get_footer();