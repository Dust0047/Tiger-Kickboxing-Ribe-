<?php /*Template Name: gallari */ ?>

<?php get_header(); ?>
<?php while(have_posts()): the_post() ?>


<section>
        <div class="big-header">
            <div class="big-about">
               

                <div class="main-content">
                    <div id="about" class="about-wrap">
                        
                        <h2><h4><?php the_field('gallari_text')?></h4></h2>
                        <p><?php the_field('gallaricont_text')?></p>
                    </div>
                </div>
    </section>



    <section>
<h1><?php the_field('bildgallari_text')?></h1>
    </section>

        <section>


            <div class="flex-container-main front-seven">
                    <div class="text-wrap">
                   
                        <div id="gallery">
  
  <img src="<?php echo get_template_directory_uri(); ?>/img/3.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/heade.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/boern.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/4.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/heade.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/boern.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/4.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/heade.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/boern.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/3.png">

  <img src="<?php echo get_template_directory_uri(); ?>/img/boern.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/3.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/heade.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/boern.png">
  <img src="<?php echo get_template_directory_uri(); ?>/img/billed.png">
  
  
  
                      
                    </div>
                </div>



                    <div class="main-image-wrap">
                    </div>
                </div>
            </div>

            
        </section>



    <?php endwhile; ?>
     

     <?php get_footer();?>