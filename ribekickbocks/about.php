<?php /*Template Name: om os */ ?>

<?php get_header(); ?>
<?php while(have_posts()): the_post() ?>

    <section>
        <div class="big-header">
            <div class="big-about">
               

                <div class="main-content">
                    <div id="about" class="about-wrap">
                        <h2>OM OS</h2>
                        <p><?php the_field('about_text')?></p>
                    </div>
                </div>
    </section>
    <section>
        <div class="main-content">
            <div id="contact" class="contact">
                <h2><?php the_field('kontakt_text')?></h2>
                <div class="flex-container-main">
                    <div class="flex-item-left contact-left">
                        <h4><?php the_field('tele_text')?></h4>
                        <p><span><?php the_field('telenr_text')?></span></p>
                    </div>

                    <div class="flex-item-right contact-right">
                        <h4><?php the_field('emailhead_text')?></h4>
                        <p><?php the_field('email_text')?></p>
                    </div>
                </div>

                <div class="flex-container-main">
                    <div class="flex-item-left contact-left">
                        <h4><?php the_field('adresse_text')?></h4>
                        <p><?php the_field('adressested_text')?></p>
                    </div>

                    <div class="flex-item-right contact-right">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="https://www.facebook.com/tigerribe" target="_blank"
                                class="fa fa-facebook"></a>
                            <a href="https://twitter.com/CoralRelife" target="_blank" class="fa fa-twitter"></a>
                            <a href="https://www.instagram.com/coralrelife2020/" target="_blank"
                                class="fa fa-instagram"></a>
                            <a href="https://www.youtube.com/user/krwn1982/about" target="_blank"
                                class="fa fa-youtube"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

         
              
   
</body>


</html>

<?php endwhile; ?>
     

     <?php get_footer();?>