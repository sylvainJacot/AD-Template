<?php

/**
 * Template Name: Home
 * 
 * 
 */
get_header();
?>






<?php 
/*
=================================== VIDEO CLIP
*/?>
<?
// get_template_part('./src/templates/video-clip-custom-wp/video-clip');
?>

    

<?php 
      $args =
      array(
        'post_type' => 'test-posts',
        'status' => 'published',
        'posts_per_page' => -1,
        'orderby'  => 'post_date',
        'order'         => 'DESC',
      );
      
     $loopTests = new WP_Query($args);    
?>
<?php 
/*
=================================== CARDS
*/?>

<?php if ($loopTests->have_posts()) : ?>
    <?php while ($loopTests->have_posts()) : $loopTests->the_post(); ?>

    <?php 
    set_query_var( 'date', true ); 
    set_query_var( 'paragraph', true ); 
    set_query_var( 'button', false );
    set_query_var( 'chip', true ); 
    set_query_var( 'chipPos', 'top-right' ); 
    get_template_part('./src/templates/cards/card');
    ?>

    <?php endwhile; ?>

<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php 
/*
=================================== BUTTONS
*/?>



<?php
set_query_var( 'fieldName', 'test_button' ); 
set_query_var( 'role', 'primary' ); 
set_query_var( 'icon', true ); 
set_query_var( 'chooseIcon', 'close' ); 
set_query_var( 'iconPosition', 'left' ); 
get_template_part('./src/templates/buttons/buttons');
?>

<?php
set_query_var( 'fieldName', 'test_button' ); 
set_query_var( 'role', 'secondary' ); 
set_query_var( 'icon', true ); 
set_query_var( 'chooseIcon', 'close' ); 
set_query_var( 'iconPosition', 'right' ); 
get_template_part('./src/templates/buttons/buttons');
?>


<?
set_query_var( 'fieldName', 'test_bouton_avec_p' ); 
set_query_var( 'role', 'tertiary' ); 
set_query_var( 'icon', true ); 
set_query_var( 'chooseIcon', 'arrow' ); 
set_query_var( 'iconPosition', 'right' ); 
get_template_part('./src/templates/buttons/buttons-with-p-tag');
?>

<?php 
/*
=================================== SOCIALS
*/?>

<?php while (have_rows('reseaux_sociaux', 'option')) : the_row(); ?>
<?php
set_query_var( 'type', 'social' ); 
set_query_var( 'wp', true ); 
get_template_part('./src/templates/buttons/button_floating_action');
?>
<?php endwhile; ?>

<?php 
/*
=================================== FORM
*/?>
<?php
set_query_var( 'formId', '1' ); 
 get_template_part('./src/templates/formidable/form');
?>



<?php 
/*
=================================== FLEXBILE
*/?>
<?php get_template_part('./src/templates/flexibleContent/flexible-main'); ?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<?php get_footer(); ?>