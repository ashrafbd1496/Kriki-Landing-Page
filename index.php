
<?php 

get_header();
?>
  
   <?php get_template_part( 'template-parts/hero', 'section' ); ?>
    </header>
    <!-- Header Area wrapper End -->

    <?php get_template_part( 'template-parts/features', 'section' ); ?>

    <?php get_template_part( 'template-parts/services', 'section' ); ?>

    <?php get_template_part( 'template-parts/video', 'section' ); ?>

    <?php get_template_part( 'template-parts/team', 'section' ); ?>

    <?php get_template_part( 'template-parts/counters', 'section' ); ?>

    <?php get_template_part( 'template-parts/pricing', 'section' ); ?>
    
    <?php get_template_part('template-parts/skills','section') ;?>

    <?php get_template_part('template-parts/portfolio','section') ;?>

    <?php get_template_part('template-parts/testimonial','section') ;?>

    <?php get_template_part('template-parts/blog','section') ;?>

    <?php get_template_part('template-parts/clients','section') ;?>

    <?php get_template_part('template-parts/contact','section') ;?>
    
   <?php get_footer(); ?>