<!-- ------------------------ HERO SECTION ---------------------------------->
<div class="heroImage" alt="Lizzie standing in the snow with and animation of faling snow over the photo" style="background-image: url( <?php the_field('background_image'); ?>)">
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
        <div class="headshot wow fadeInLeft">
          <img alt="professional headshot of Lizzie" src="<?php the_field('headshot'); ?>">
          <div class="headshotGold">
            <img src="<?php bloginfo('template_url') ?>/images/gold.jpg" alt="">
          </div>
        </div>
      <h4 class="wow fadeInRight"><?php the_field('about_heading'); ?></h4>
      <p class="wow fadeInRight"><?php the_field('about_text'); ?></p>  
  </section> <!-- end of about section -->
</div>

<!-- ------------------------ END: ABOUT SECTION ---------------------------------->

<!-- ------------------------ SKILLS SECTION ---------------------------------->

<section class="skills" id="skills">
  <div class="main">
    <div class="skillsHeading wow fadeInRight">
      <h4>My Skills</h4>
      <p><?php the_field('skills_text'); ?></p>
    </div>
    <div class="skillIconSection wow fadeInLeft">
    <h5>Here are a few of the tools I like to use:</h5>
      <div class="skillIconFlex">
          <?php while(has_sub_field('skills') ): ?>
          <div class="skillIcons">
             <a href="#"><i class="devicons devicons-<?php the_sub_field('skill_icon') ?>"></i></a>
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
    <div class="portfolioHeader">
      <h2>My Portfolio</h2>
      <p>Here are a few of my favourite Portfolio pieces:</p>
    </div>
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
                <div class="portfolioImage wow fadeInLeft" alt="screenshot of portfolio piece">
                    <?php the_post_thumbnail('large'); ?>
                    <div class="gold">
                      <img src="<?php bloginfo('template_url') ?>/images/gold.jpg" alt="">
                    </div>
                </div> 
                <div class="portfolioText wow fadeInRight">
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
                 <a href="<?php the_field('live_site'); ?>" >View Site</a>
               </div> <!-- end of portfolioText -->
            </div> <!-- end of portfolioItem -->
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
    <div class="contact">
      <div class="contactLeft">
        <div class="contactHead">
          <h2>Contact Me</h2>
        </div>
        <div class="contactLeftBody">
          <h4>Interested in my work? Let's get in touch</h4>
          <p><?php the_field('contact_text'); ?></p> 
          <?php while(has_sub_field('contact_details') ): ?>
              <h5><span>Email me:  </span>  <?php the_sub_field('email') ?></h5>
              <h5><span>Call me:  </span>  <?php the_sub_field('telephone') ?></h5>
          <?php endwhile; ?>
          <a href="https://twitter.com/lizziecodes"><i class="fa fa-twitter-square"></i></a>
          <a href="https://github.com/epainter1"><i class="fa fa-github"></i></a>
          <a href="http://http://www.codepen.io/lpainter/"><i class="fa fa-codepen"></i></a>
          <a href="https://medium.com/@lizzie_painter"><i class="fa fa-medium"></i></a>
          <!-- <a href="#" class="resume">Download my Resume</a> -->
          <a href="<?php the_field('resume'); ?>" download="" class="resume">Download my Resume</a>
        </div> <!-- end of contactLeftBody -->
      </div> <!-- end of contactLeft -->
      <div class="contactForm">
          <h3>Drop me a line!</h3>
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


