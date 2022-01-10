 <?php if (get_theme_mod('price_section_show',true)==true): ?>

 <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('price_section_title') ?></h2>
          <p><?php echo get_theme_mod('price_section_description') ?></p>
        </div>
        <div class="row">
          <?php 

            $prices = get_theme_mod('price_repeater');
            foreach($prices as $price): ?>

          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="title">
                <h3><?php echo $price['pricing_item_title']; ?></h3>
              </div>
              <div class="pricing-header">
                <p class="price-value"><?php echo $price['pricing_item_value']; ?><span>/ Month</span></p>
              </div>
             
                <?php if ( ! empty( $price ) ) : ?>
                   <ul class="description">
                    <?php foreach ( $price as $selected_option ) : ?>
                      <li><?php echo $selected_option['pricing_item_options']; ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>

              <button onclick="location.href='<?php echo $price['pricing_item_button_url']; ?>'" class="btn btn-common"><?php echo $price['pricing_item_button_text']; ?></button>
            </div> 
          </div>

        <?php endforeach; ?>
      
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->
    <?php endif; ?>