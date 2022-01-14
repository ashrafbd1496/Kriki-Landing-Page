    <?php if (get_theme_mod('testimonial_section_show',true)==true):?>

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <?php 
                $testimonials = get_theme_mod('testimonial_repeater');
                foreach($testimonials as $testimonial):?>
             

              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <?php 

                      $img_url = wp_get_attachment_image_src($testimonial['testimonial_item_image']);
                     ?>
                    <img src="<?php echo $img_url[0]; ?>" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo $testimonial['info_name']; ?></a></h2>
                    <h3><a href="#"><?php echo $testimonial['info_desig']; ?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo $testimonial['testimonial_item_description']; ?> </p>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  
    <?php endif; ?>