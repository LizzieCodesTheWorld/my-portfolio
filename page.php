<!-- ------------------------ HERO SECTION ---------------------------------->
<div class="heroImage" style="background-image: url( <?php the_field('background_image'); ?>)">
    <div class="snow"></div>
    <?php get_header();  ?>
    <div class="main">
      <div class="heroText">
          <h1>
              Lizzie Painter
          </h1>
          <p class="mainSubheading"><?php the_field('hero_subheading'); ?> </p>
      </div> <!-- end of heroText -->
    </div> <!-- end of main -->
</div> <!-- end of heroImage -->
<!-- <div class="main"> -->
<!-- ------------------------ END: HERO SECTION ---------------------------------->

<!-- ------------------------ ABOUT SECTION ---------------------------------->

<div class="main">
  <section class="about" id="about">
        <div class="headshot">
          <img src="<?php the_field('headshot'); ?>">
          <div class="headshotGold">
            <img src="<?php bloginfo('template_url') ?>/images/gold.jpg" alt="">
          </div>
        </div>

      <h4><?php the_field('about_heading'); ?></h4>
      <p><?php the_field('about_text'); ?></p>  
  </section> <!-- end of about section -->
</div>

<!-- ------------------------ END: ABOUT SECTION ---------------------------------->

<!-- ------------------------ SKILLS SECTION ---------------------------------->

<section class="skills" id="skills">
  <div class="main">
    <div class="skillsHeading">
      <h4>My Skills</h4>
      <p><?php the_field('skills_text'); ?></p>
    </div>
    <div class="skillIconSection">
    <h5>Here are a few of the tools I like to use:</h5>
      <div class="skillIconFlex">
          <?php while(has_sub_field('skills') ): ?>
          <div class="skillIcons">
             <i class="devicons devicons-<?php the_sub_field('skill_icon') ?>"></i>
          </div>
         <?php endwhile; ?>
      </div> <!-- end of skillIconFlex -->
    </div> <!-- end of main -->
  </div>
</section> <!-- end of skills section -->

<!-- ------------------------ END: SKILLS SECTION ---------------------------------->

<!-- ------------------------ PORTFOLIO SECTION ---------------------------------->

<!-- <div class="main"> -->
<section class="portfolio" id="portfolio">
  <div class="main">
    <h2>My Portfolio</h2>

    <!-- loop for portfolio items -->
      <?php $portfolio = new WP_Query(
        array(
          'posts_per_page' => 4,
          'post_type' => 'portfolio',
          'order' => 'ASC'
          )
      ); ?>   
      <div class="portfolioFlex">
        <?php if ( $portfolio->have_posts() ) : ?>
          <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
          <!-- [stuff that happens while inside the loop] -->
            <div class="portfolioItem">
                <div class="portfolioImage">
                    <?php the_post_thumbnail('large'); ?>
                    <div class="gold">
                      <img src="<?php bloginfo('template_url') ?>/images/gold.jpg" alt="">
                    </div>
                </div> 
                <div class="portfolioText">
                 <h3> <?php the_title(); ?></h3> 
                 <h4>  “<?php the_field('project_name') ?>"</h4>
                 <p><?php the_content(); ?> </p>    
                 <ul>
                    <?php  if( have_rows('skills_used') ):
                        while ( have_rows('skills_used') ) : the_row();?>
                        <li>
                          <?php  the_sub_field('skill_used'); ?>
                        </li>
                          <?php
                        endwhile;
                    else :
                        // no rows found
                    endif;?>
                 </ul>
                 <a href="<?php the_field('live_site'); ?>">View Site</a>
               </div>
            </div>
          <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else:  ?>
        <?php endif; ?>
      </div> <!-- end of portfolioFlex -->
    </div>  <!-- end of main -->
</section>

<!-- ------------------------ END: SKILLS SECTION ---------------------------------->

<!-- ------------------------ CONTACT SECTION ---------------------------------->

<section class="contactSection" id="contact">
  <div class="main">
    <div class="contactHeader">
      <div class="contactHead">
        <h2>Contact Me</h2>
      </div>
      <div class="contactSubheader">
        <h4>Interested in my work? Let's get in touch</h4>
        <p><?php the_field('contact_text'); ?></p> 
      </div>
    </div>
    <div class="contact">
      <div class="contactLeft">
          <div class="social">
            <h2>Say Hi!</h2>
            <?php while(has_sub_field('contact_details') ): ?>
                <h5><span>Email me:</span>  <?php the_sub_field('email') ?></h5>
                <h5><span>Call me:</span>  <?php the_sub_field('telephone') ?></h5>
              <?php endwhile; ?>
          </div>
          <div class="emailCall">
            <a href="https://twitter.com/lizziecodes"><i class="fa fa-twitter-square"></i></a>
            <a href="https://github.com/epainter1"><i class="fa fa-github"></i></a>
            <a href="http://http://www.codepen.io/lpainter/"><i class="fa fa-codepen"></i></a>
            <a href="https://medium.com/@lizzie_painter"><i class="fa fa-medium"></i></a>
            <a href="#" class="resume">Download my Resume</a>
          </div>
      </div> <!-- end of contactLeft -->
      <div class="contactForm">
          <h2>Drop me a line!</h2>
          <form class="topline" action="//formspree.io/epainter2005@hotmail.com" method="POST">
            <input type="text" name="firstname" placeholder="  Your name*">
            <input type="text" name="email" placeholder="  Your email*">
            <textarea name="message" cols="35" rows="10" placeholder="  Your message*"></textarea>
            <input type="submit" class="submit" value="Send">
          </form>
      </div> <!-- end of contactForm -->
    </div> <!-- end of contact -->
    </div> <!-- end of main -->
</section> <!-- end of about section -->

<!-- ------------------------ END: CONTACT SECTION ---------------------------------->

<!-- ------------------------ FOOTER SECTION ---------------------------------->

  <?php get_footer(); ?>


