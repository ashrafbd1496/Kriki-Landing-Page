
    <!-- Services Section Start -->
    <?php
        if(get_theme_mod('service_show', true) == true ) {
    ?>
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('service_title') ;?></h2>
          <p><?php echo get_theme_mod('service_description') ;?></p>
        </div>
        <div class="row">

          <!-- Services item -->
          <?php 

            $services = get_theme_mod('service_repeater');
            foreach($services as $service){
              ?>
                <div class="col-md-6 <?php echo get_theme_mod('service_item_column') ;?> col-xs-12">
                  <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon">
                      <i class="<?php echo $service['service_item_icon']; ?>"></i>
                    </div>
                    <div class="services-content">
                      <h3><a href="#"><?php echo $service['service_item_title']; ?></a></h3>
                      <p><?php echo $service['service_item_desc']; ?></p>
                    </div>
                  </div>
          </div>

              <?php
            }

           ?>
          
       
        </div>
      </div>
    </section>
     <?php
      }
    ?>
    <!-- Services Section End -->