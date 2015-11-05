<div class="heroImage" style="background-image: url( <?php the_field('background_image'); ?>)">
    <?php get_header();  ?>
    <div class="heroText">
        <h1>
            Lizzie Painter
        </h1>
        <p class="mainSubheading">Hi there, I'm a Front-end Developer from the UK. I love making beautiful, intuitive and accessible designs come to life with code.</p>
    </div> <!-- end of heroText -->
</div> <!-- end of heroImage -->
<div class="main">
  <div class="container">
    <div class="content">
    <section class="about">
        <h4><?php the_field('about_heading'); ?></h4>
        <p><?php the_field('about_text'); ?></p>  
    </section> <!-- end of about section -->
    <section class="skills">
        <h4><?php the_field('skills_heading'); ?> </h4>
        <p><?php the_field('skills_text'); ?></p>
        <div class="skillIconSection">
              <?php while(has_sub_field('skills') ): ?>
              <div class="skillIcons">
                 <i class="devicons devicons-<?php the_sub_field('skill_icon') ?>"></i>
                 <p><?php the_sub_field('skill_name') ?></p> 
              </div>
              <!-- Our sub fields go here -->
             <?php endwhile; ?>
        </div>
                 
    </section> <!-- end of skills section -->

    <section class="portfolio">
        <h2>My Portfolio</h2>
        <!-- loop for portfolio items -->
        <?php

        $portfolio = new WP_Query(
          array(
            'posts_per_page' => 4,
            'post_type' => 'portfolio',
            'order' => 'ASC'
            )
        ); ?>

          <?php if ( $portfolio->have_posts() ) : ?>

            <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
            <!-- [stuff that happens while inside the loop] -->
               <h2> <?php the_title(); ?></h2> 
               <h3>  <?php the_field('project_name') ?></h3>
               <p><?php the_content(); ?> </p>    
               <ul>
                    <?php  if( have_rows('skills_used') ):

                            while ( have_rows('skills_used') ) : the_row();

                                // Your loop code
                            ?>
                            <li>
                              <?php  the_sub_field('skill_used'); ?>
                            </li>
                              <?php
                            endwhile;
                        else :
                            // no rows found
                        endif;?>
               </ul>
               <div class="portfolioImage">
                    <?php the_post_thumbnail('large'); ?>
               </div>
            <?php endwhile; ?>
                 

              <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <!-- [stuff that happens if there aren't any posts] -->
          <?php endif; ?>
    </section>
    <section class="contact">
        <h4><?php the_field('contact_heading'); ?></h4>
        <p><?php the_field('contact_text'); ?></p> 
        <div class="contactLeft">
            <div class="social">
              <i class="fa fa-twitter-square"></i>
              <i class="fa fa-github"></i>
              <i class="fa fa-codepen"></i>
              <i class="fa fa-medium"></i>
            </div>
            <div class="emailCall">
              <h5>Email me:<?php the_field('email') ?></h5>
              <h5>Call me:<?php the_field('phone') ?></h5>
            </div>
        </div> <!-- end of contactLeft -->
        <div class="contactForm">
          
        </div> 
    </section> <!-- end of about section -->
    </div> <!-- /,content -->

  </div> <!-- /.container -->
  <?php get_footer(); ?>
</div> <!-- /.main -->


