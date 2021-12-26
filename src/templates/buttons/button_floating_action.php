<?php 
$type = get_query_var('type'); 
$wp = get_query_var('wp'); 
$svgPath = '/src/assets/icones/';
$iconName = get_query_var('iconName'); 
?>

<?php
/** A COPIER-COLLER POUR UTILISER LES VARIABLES :
set_query_var( 'type', 'default' ); 
set_query_var( 'wp', true ); 
set_query_var( 'iconName', 'iconName' ); 
*/
?>

<?php if($wp === true) : ?>

    <?php if($type === 'social') : ?>

    <a class="buttonfa_social js-buttonfa_social" href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
    <span class="button_primary-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . $svgPath . sanitize_title(get_sub_field('nom')) . '.svg');?></span>
    </a>
    <?php endif;?>

    <?php if($type === 'default') : ?>
    <a class="buttonfa_default js-buttonfa_default" href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener">
    <span class="button_primary-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . $svgPath . sanitize_title(get_sub_field('nom')) . '.svg');?></span>
    </a>
    <?php endif;?>

<?php else :?>

    <?php if($type === 'social') : ?>

    <div class="buttonfa_social js-buttonfa_social">
    <span class="button_primary-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . $svgPath . $iconName  . '.svg');?></span>
    </div>
    <?php endif;?>

    <?php if($type === 'default') : ?>
    <div class="buttonfa_default js-buttonfa_default">
    <span class="button_primary-icon"><?php echo file_get_contents( get_stylesheet_directory_uri() . $svgPath . $iconName  . '.svg');?></span>
    </div>
    <?php endif;?>



<?php endif;?>


