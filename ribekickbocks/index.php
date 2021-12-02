<?php get_header(); ?>

    <?php while(have_posts()): the_post() ?>

    <section>
        <div class="big-header">
            <div class="big-front">
                <header>
                 
                    <div class="top-header-wrap-2">
                        
                    </div>
                    <div class="top-header-wrap-3">
                        <div class="social">
                            <a href="https://www.facebook.com/tigerribe" target="_blank"
                                class="fa fa-facebook"></a>
                            <a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
                            <a href="https://instagram.com/tigerkickboxingribe" target="_blank"
                                class="fa fa-instagram"></a>
                            <a href="https://www.youtube.com/watch?v=kgNg8JkM8c0/" target="_blank"
                                class="fa fa-youtube"></a>
                        </div>
                    </div>
                </header>


                <div class="main-header">
                    <div class="mh-text-wrap">
                    <h1><?php the_field('main_text')?></h1>
                    </div>
                </div>



                <div class="btm-header">
                    <div class="btm-header-wrap-1">
                        <div class="wrap">
                            <hr>
                            <p><span>Ribe Kickboxing </span>Stay motivated</p>
                        </div>
                    </div>

                    <div class="btm-header-wrap-2 btm-header-m">
                        <div class="front-down">
                            <a href="#step-1" class="fa fa-caret-down" aria-hidden="true"></a>
                        </div>
                    </div>

                    <div class="btm-header-wrap-3">
                        <a target="_blank"
                            href="">Get fit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------- MAIN CONTENT -------->
    <div class="main-content">
        <section id="step-1">
            <h2>OM OS</h2>
            <div class="flex-container-main front-one">
                <div class="front-img-wrap ">
                <img class="front-img hide-d" src="<?php the_field ("photo") ?>" alt="">
                    
                </div>
                <div class="flex-item-left-main">
                    <div class="text-wrap">
                        <h4>Tiger Kickboksing</h4>

                        <p><?php the_field('about_text')?></p>


                    </div>
                </div>

                <div class="flex-item-right-main hide-m">
                    <div class="main-image-wrap hide-m">
                        <img class="hide-m large-front-img" src="<?php echo get_template_directory_uri(); ?>/img/omossektion.png">
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div class="flex-container-main front-two">
                <div class="flex-item-left-main">
                    <div class="main-image-wrap">
                        <img class="myImage hide-m custom-left" src="<?php echo get_template_directory_uri(); ?>/img/3.png">

                    </div>
                </div>

                <div class="flex-item-right-main">
                    <div class="text-wrap">
                        <h4><?php the_field('headhvorfor_text')?></h4>
                        <p><?php the_field('hvorfor_text')?></p>

                        <p>

                    </div>
                </div>
            </div>

            <div class="flex-container-main front-three">
                <div class="flex-item-left-main">
                    <div class="text-wrap">
                        <h4><?php the_field('trahead_text')?></h4>
                         <p><?php the_field('traning_text')?></p>

                    </div>
                </div>

                <div class="flex-item-right-main">
                    <div class="main-image-wrap">
                        <img class="myImage hide-m" src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="flex-container-main front-four">
                <div class="flex-item-left-main">
                    <div class="main-image-wrap">
                        <img class="myImage custom-right" src="<?php echo get_template_directory_uri(); ?>/img/udstyrsec.png">
                    </div>
                </div>

                <div class="flex-item-right-main">
                    <div class="text-wrap">
                        <h4><?php the_field('udhead_text')?></h4>
                        <p><?php the_field('udstyr_text')?></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex-container-main front-five">
                <div class="flex-item-left-main">
                    <div class="text-wrap">
                    <h4><?php the_field('prishead_text')?></h4>
                        <p><?php the_field('priser_text')?></p>

                    </div>
                </div>

                <div class="flex-item-right-main hide-m">
                    <div class="main-image-wrap">
                        <img class="myImage custom-right" src="<?php echo get_template_directory_uri(); ?>/img/4.png">

                    </div>
                </div>
            </div>

            

              
            </div>
        </section>
    </div> 

    </div>
        <section>

      
        <div class="voksenvideo">
        <iframe width="960" height="550" src="https://www.youtube.com/embed/kgNg8JkM8c0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   

        </div>


        </div>

       </section>

       <section>

      
        <div class="voksenvideo">
        <iframe width="960" height="550" src="https://www.youtube.com/embed/n6VqXxnRG-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


        </div>

       </section>
      



    <section>
    <div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="300" id="gmap_canvas"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2270.0727597597465!2d8.760612515849195!3d55.32181553261639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464b370f8631ae4b%3A0x9ec3997ce5ac7bd8!2sHaulundvej%203%2C%206760%20Ribe!5e0!3m2!1sda!2sdk!4v1638440335195!5m2!1sda!2sdk"
            frameborder="0" scrolling="no"></iframe>
    </div>
</div>









    </section>
</body>



    <?php endwhile; ?>
     

    <?php get_footer();?>