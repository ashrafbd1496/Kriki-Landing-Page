
<?php if (get_theme_mod('skill_section_show',true)==true) :  ?>

 <!-- Skill area  Section Starts -->
    <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="<?php echo esc_attr(get_theme_mod('skill_image_setting') );?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php echo esc_html(get_theme_mod('skill_title_setting'));?></h2>
              <p>
               <?php echo esc_attr(get_theme_mod('skill_description_setting'));?>
              </p>
            </div>
            <div class="skills-section">

              <?php $skills = get_theme_mod('skill_repeater');
               foreach ($skills as $skill):?>

              <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5><?php echo $skill['skill_item_title']; ?><span class="ml-1 pull-right"><?php echo $skill['skill_numbers']; ?>%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="<?php echo $skill['skill_numbers']; ?>" style="width: <?php echo $skill['skill_numbers']; ?>%;"></div>
                </div>
              </div>
              
            <?php endforeach; ?>
            
              <!-- End Progressbar -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Skill area  Section Starts -->
    <?php endif; ?>
    