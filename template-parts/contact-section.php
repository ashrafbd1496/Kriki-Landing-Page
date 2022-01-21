<?php if (get_theme_mod('contact_section_show',true)==true):?>

<!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">

              <?php echo do_shortcode('[contact-form-7 id="439" title="kirki contact form"]'); ?>


            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1><?php echo esc_html(get_theme_mod('contact_section_title')); ?></h1>
                <p><?php echo esc_html(get_theme_mod('contact_section_desc')); ?></p>
              </div>
              <h2><?php echo esc_html(get_theme_mod('contact_section_subtitle')); ?></h2>
              <div class="contact-right">
                <?php $contacts = get_theme_mod('contact_repeater') ;
                  foreach($contacts as $contact):?>
          
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="<?php echo $contact['contact_item_icon'] ;?>"></i>
                  </div>
                  <p><?php echo $contact['contact_item_title'] ;?></p>
                </div>
              <?php endforeach; ?>


              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    <?php endif; ?>