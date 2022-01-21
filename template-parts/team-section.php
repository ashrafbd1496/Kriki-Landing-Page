<?php if (get_theme_mod('team_section_show', true)==true) {?>


 <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('team_section_title')) ;?></h2>
          <p><?php echo esc_html(get_theme_mod('team_section_desc')) ?></p>
        </div>
        <div class="row">

          <?php $teams = get_theme_mod('team_repeater');
            foreach($teams as $team){
              $team_member_image = wp_get_attachment_image_src($team['teams_people_image']);
              ?>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo $team_member_image[0]; ?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="<?php echo $team['team_member_facebook'] ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo $team['team_member_twitter'] ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo $team['team_member_instagram'] ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"><?php echo $team['team_people_name'] ?></a></h3>
                <p><a href="#"><?php echo $team['teams_people_desg'] ?></p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          
              <?php
            }
            ?>
        
        </div>
      </div>
    </section>
    <!-- Team Section End -->

  <?php } ?>